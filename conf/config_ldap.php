<?php
// LDAP parameters
$ldap_host = getenv('ldap_host') ?: "ldap://localhost/";
$ldap_port = intval(getenv('ldap_port')) ?: 389;
$ldap_version = intval(getenv('ldap_version')) ?: 3;
$ldap_start_tls = boolval(getenv('ldap_start_tls')) ?: false;

// Attribute use to identify user on LDAP - ex : uid, mail, sAMAccountName
$ldap_search_attribute = getenv('ldap_search_attribute') ?: '["uid", "givenname", "sn", "cn", "homedirectory", "mail", "maildrop"]';

// variable use in resource.php
$ldap_base_dn = getenv('ldap_base_dn') ?: "ou=users,dc=yunohost,dc=org";
$ldap_filter = getenv('ldap_filter') ?: "(objectClass=*)";

// ldap service user to allow search in ldap
$ldap_bind_dn = getenv('ldap_bind_dn') ?: "uid=local,ou=users,dc=yunohost,dc=org";
$ldap_bind_pass = getenv('ldap_bind_pass') ?: "";
