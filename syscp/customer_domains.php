<?php
/**
 * filename: $Source$
 * begin: Friday, Aug 06, 2004
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. This program is distributed in the
 * hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * @author Florian Lippert <flo@redenswert.de>
 * @copyright (C) 2003-2004 Florian Lippert
 * @package Panel
 * @version $Id$
 */

	define('AREA', 'customer');

	/**
	 * Include our init.php, which manages Sessions, Language etc.
	 */
	require("./lib/init.php");

	if(isset($_POST['id']))
	{
		$id=intval($_POST['id']);
	}
	elseif(isset($_GET['id']))
	{
		$id=intval($_GET['id']);
	}

	if($page=='overview')
	{
		eval("echo \"".getTemplate("domains/domains")."\";");
	}
	elseif($page=='domains')
	{
		if($action=='')
		{
			$result=$db->query('SELECT `standardsubdomain` FROM `'.TABLE_PANEL_CUSTOMERS.'` WHERE `standardsubdomain`!=\'0\'');
			$domains=array();
			while(($row=$db->fetch_array($result)) !== false)
			{
				$domains[]='\''.$row['standardsubdomain'].'\'';
			}
			$domains=join($domains,',');
			$result=$db->query("SELECT `id`, `customerid`, `domain`, `documentroot`, `isemaildomain`, `caneditdomain`, `iswildcarddomain`, `parentdomainid` FROM `".TABLE_PANEL_DOMAINS."` WHERE `customerid`='".$userinfo['customerid']."' AND `id` NOT IN (".$domains.") ORDER BY `domain` ASC");
			$domains='';
			$parentdomains_count=0;
			$domains_count=0;
			$domain_array=array();
			while($row=$db->fetch_array($result))
			{
				$row['domain'] = $idna_convert->decode($row['domain']);
				$domain_array[$row['domain']] = $row;
			}
			ksort($domain_array);
			foreach($domain_array as $row)
			{
				$row['documentroot']=str_replace($userinfo['documentroot'],'',$row['documentroot']);
				eval("\$domains.=\"".getTemplate("domains/domains_domain")."\";");
				if($row['parentdomainid'] == '0' && $row['iswildcarddomain'] != '1' && $row['caneditdomain'] == '1')
				{
					$parentdomains_count++;
				}
				$domains_count++;
			}

			eval("echo \"".getTemplate("domains/domainlist")."\";");
		}

		elseif($action=='delete' && $id!=0)
		{
			$result=$db->query_first("SELECT `id`, `customerid`, `domain`, `documentroot`, `isemaildomain`, `parentdomainid` FROM `".TABLE_PANEL_DOMAINS."` WHERE `customerid`='".$userinfo['customerid']."' AND `id`='$id'");
			if(isset($result['parentdomainid']) && $result['parentdomainid']!='0')
			{
				if(isset($_POST['send']) && $_POST['send']=='send')
				{
					if($result['isemaildomain'] == '1')
					{
						$emails=$db->query_first('SELECT COUNT(`id`) AS `count` FROM `'.TABLE_MAIL_VIRTUAL.'` WHERE `customerid`=\''.$userinfo['customerid'].'\' AND `domainid`=\''.$id.'\'');
						if($emails['count'] != '0')
						{
							standard_error('domains_cantdeletedomainwithemail');
						}
					}
					$result=$db->query("DELETE FROM `".TABLE_PANEL_DOMAINS."` WHERE `customerid`='".$userinfo['customerid']."' AND `id`='$id'");
					$result=$db->query("UPDATE `".TABLE_PANEL_CUSTOMERS."` SET `subdomains_used`=`subdomains_used`-1 WHERE `customerid`='".$userinfo['customerid']."'");
					inserttask('1');
					header("Location: $filename?page=$page&s=$s");
				}
				else {
					ask_yesno('domains_reallydelete', $filename, "id=$id;page=$page;action=$action", $idna_convert->decode($result['domain']));
				}
			}
			else
			{
				standard_error('domains_cantdeletemaindomain');
			}
		}

		elseif($action=='add')
		{
			if($userinfo['subdomains_used'] < $userinfo['subdomains'] || $userinfo['subdomains'] == '-1')
			{
				if(isset($_POST['send']) && $_POST['send']=='send')
				{
					$subdomain=$idna_convert->encode(addslashes($_POST['subdomain']));
					$domain=$idna_convert->encode(addslashes($_POST['domain']));
					$domain_check=$db->query_first("SELECT `id`, `customerid`, `domain`, `documentroot`, `isemaildomain`, `openbasedir`, `safemode`, `speciallogfile`, `specialsettings` FROM `".TABLE_PANEL_DOMAINS."` WHERE `domain`='$domain' AND `customerid`='".$userinfo['customerid']."' AND `parentdomainid`='0' AND `iswildcarddomain`='0' AND `caneditdomain`='1' ");
					$completedomain=$subdomain.'.'.$domain;
					$completedomain_check=$db->query_first("SELECT `id`, `customerid`, `domain`, `documentroot`, `isemaildomain` FROM `".TABLE_PANEL_DOMAINS."` WHERE `domain`='$completedomain' AND `customerid`='".$userinfo['customerid']."'");
					
					$path=addslashes($_POST['path']);
					if(!preg_match('/^https?\:\/\//', $path))
					{
						$path=makeCorrectDir($path);
						$path=$userinfo['documentroot'].$path;
						if(!is_dir($path))
						{
							standard_error('directorymustexist');
							exit;
						}
					}
					
					$isemaildomain = intval($_POST['isemaildomain']);
					if($isemaildomain != '1') {
						$isemaildomain = '0';
					}

					if($path=='' || $subdomain=='' || $subdomain=='www' || preg_match('/.*\..*/',$subdomain) || $domain=='' || $completedomain_check['domain']==$completedomain || $domain_check['domain']!=$domain)
					{
						standard_error('notallreqfieldsorerrors');
						exit;
					}
					else
					{
						$result=$db->query("INSERT INTO `".TABLE_PANEL_DOMAINS."` (`customerid`, `domain`, `documentroot`, `parentdomainid`, `isemaildomain`, `openbasedir`, `safemode`, `speciallogfile`, `specialsettings`) VALUES ('".$userinfo['customerid']."', '$completedomain', '$path', '".$domain_check['id']."', '".$isemaildomain."', '".$domain_check['openbasedir']."', '".$domain_check['safemode']."', '".$domain_check['speciallogfile']."', '".$domain_check['specialsettings']."')");
						$result=$db->query("UPDATE `".TABLE_PANEL_CUSTOMERS."` SET `subdomains_used`=`subdomains_used`+1 WHERE `customerid`='".$userinfo['customerid']."'");
						inserttask('1');
						header("Location: $filename?page=$page&s=$s");
					}
				}
				else
				{
					$result=$db->query("SELECT `id`, `domain`, `documentroot`, `isemaildomain` FROM `".TABLE_PANEL_DOMAINS."` WHERE `customerid`='".$userinfo['customerid']."' AND `parentdomainid`='0' AND `iswildcarddomain`='0' AND `caneditdomain`='1' ORDER BY `domain` ASC");
					$domains='';
					while($row=$db->fetch_array($result))
					{
						$domains.=makeoption($idna_convert->decode($row['domain']),$row['domain']);
					}
					eval("echo \"".getTemplate("domains/domains_add")."\";");
				}
			}
		}

		elseif($action=='edit' && $id!=0)
		{
			$result=$db->query_first("SELECT `d`.`id`, `d`.`customerid`, `d`.`domain`, `d`.`documentroot`, `d`.`isemaildomain`, `d`.`iswildcarddomain`, `pd`.`subcanemaildomain` FROM `".TABLE_PANEL_DOMAINS."` `d`, `".TABLE_PANEL_DOMAINS."` `pd` WHERE `d`.`customerid`='".$userinfo['customerid']."' AND `d`.`id`='$id' AND ((`d`.`parentdomainid`!='0' AND `pd`.`id`=`d`.`parentdomainid`) OR (`d`.`parentdomainid`='0' AND `pd`.`id`=`d`.`id`)) AND `d`.`caneditdomain`='1'");
			
			if(isset($result['customerid']) && $result['customerid']==$userinfo['customerid'])
			{
				if(isset($_POST['send']) && $_POST['send']=='send')
				{
					$path=addslashes($_POST['path']);
					if(!preg_match('/^https?\:\/\//', $path))
					{
						$path=makeCorrectDir($path);
						$path=$userinfo['documentroot'].$path;
						if(!is_dir($path))
						{
							standard_error('directorymustexist');
							exit;
						}
					}

					if(isset($_POST['iswildcarddomain']) && $_POST['iswildcarddomain'] == '1')
					{
						$wildcarddomaincheck = $db->query("SELECT `id` FROM `".TABLE_PANEL_DOMAINS."` WHERE `parentdomainid` = '{$result['id']}'");
						if($db->num_rows($wildcarddomaincheck) != '0')
						{
							standard_error('firstdeleteallsubdomains');
							exit;
						}
						$iswildcarddomain = '1';
					}
					else
					{
						$iswildcarddomain = '0';
					}
					$isemaildomain = intval($_POST['isemaildomain']);
					if($isemaildomain != '1')
					{
						$isemaildomain = '0';
					}
					if($result['subcanemaildomain'] == '0')
					{
						$isemaildomain = '0';
					}


					if($path=='')
					{
						standard_error('notallreqfieldsorerrors');
						exit;
					}
					else
					{
						if(($result['isemaildomain'] == '1') && ($isemaildomain == '0'))
						{
							$db->query("DELETE FROM `".TABLE_MAIL_USERS."` WHERE `customerid`='".$userinfo['customerid']."' AND `domainid`='$id'");
							$db->query("DELETE FROM `".TABLE_MAIL_VIRTUAL."` WHERE `customerid`='".$userinfo['customerid']."' AND `domainid`='$id'");
						}
						if($path != $result['documentroot'] || $isemaildomain != $result['isemaildomain'] || $iswildcarddomain != $result['iswildcarddomain'])
						{
							inserttask('1');
							$result=$db->query("UPDATE `".TABLE_PANEL_DOMAINS."` SET `documentroot`='$path', `isemaildomain`='$isemaildomain', `iswildcarddomain`='$iswildcarddomain' WHERE `customerid`='".$userinfo['customerid']."' AND `id`='$id'");
						}
						header("Location: $filename?page=$page&s=$s");
					}
				}
				else {
					$result['domain'] = $idna_convert->decode($result['domain']);
					$result['documentroot']=str_replace($userinfo['documentroot'],'',$result['documentroot']);
					$iswildcarddomain=makeyesno('iswildcarddomain', '1', '0', $result['iswildcarddomain']);
					$isemaildomain=makeyesno('isemaildomain', '1', '0', $result['isemaildomain']);
					eval("echo \"".getTemplate("domains/domains_edit")."\";");
				}
			}
			else
			{
				standard_error('domains_canteditdomain');
			}
		}
	}

?>