<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

global $apiConfig;
$apiConfig = array(
    // True if objects should be returned by the service classes.
    // False if associative arrays should be returned (default behavior).
    'use_objects' => false,
  
    // The application_name is included in the User-Agent HTTP header.
    'application_name' => 'Fandrop',

    // OAuth2 Settings, you can get these keys at https://code.google.com/apis/console
    'oauth2_redirect_uri' => (@$_SERVER['HTTPS'] ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].'/gmail_auth',

    // The developer key, you get this at https://code.google.com/apis/console
    'developer_key' => '',

    // OAuth1 Settings.
    // If you're using the apiOAuth auth class, it will use these values for the oauth consumer key and secret.
    // See http://code.google.com/apis/accounts/docs/RegistrationForWebAppsAuto.html for info on how to obtain those
    'oauth_consumer_key'    => 'anonymous',
    'oauth_consumer_secret' => 'anonymous',
  
    // Site name to show in the Google's OAuth 1 authentication screen.
    'site_name' => 'www.example.org',

    // Which Authentication, Storage and HTTP IO classes to use.
    'authClass'    => 'apiOAuth2',
    'ioClass'      => 'apiCurlIO',
    'cacheClass'   => 'apiFileCache',

    // If you want to run the test suite (by running # phpunit AllTests.php in the tests/ directory), fill in the settings below
    'oauth_test_token' => '', // the oauth access token to use (which you can get by runing authenticate() as the test user and copying the token value), ie '{"key":"foo","secret":"bar","callback_url":null}'
    'oauth_test_user' => '', // and the user ID to use, this can either be a vanity name 'testuser' or a numberic ID '123456'

    // Don't change these unless you're working against a special development or testing environment.
    'basePath' => 'https://www.googleapis.com',

    // IO Class dependent configuration, you only have to configure the values for the class that was configured as the ioClass above
    'ioFileCache_directory'  =>
        (function_exists('sys_get_temp_dir') ?
            sys_get_temp_dir() . '/apiClient' :
        '/tmp/apiClient'),
    'ioMemCacheStorage_host' => '127.0.0.1',
    'ioMemcacheStorage_port' => '11211',

    // Definition of service specific values like scopes, oauth token URLs, etc
    'services' => array(
      'analytics' => array('scope' => 'https://www.googleapis.com/auth/analytics.readonly'),
      'calendar' => array(
          'scope' => array(
              "https://www.googleapis.com/auth/calendar",
              "https://www.googleapis.com/auth/calendar.readonly",
          )
      ),
      'books' => array('scope' => 'https://www.googleapis.com/auth/books'),
      'latitude' => array(
          'scope' => array(
              'https://www.googleapis.com/auth/latitude.all.best',
              'https://www.googleapis.com/auth/latitude.all.city',
          )
      ),
      'moderator' => array('scope' => 'https://www.googleapis.com/auth/moderator'),
      'oauth2' => array(
          'scope' => array(
              'https://www.googleapis.com/auth/userinfo.profile',
              'https://www.googleapis.com/auth/userinfo.email',
          )
      ),
      'plus' => array('scope' => 'https://www.googleapis.com/auth/plus.me'),
      'siteVerification' => array('scope' => 'https://www.googleapis.com/auth/siteverification'),
      'tasks' => array('scope' => 'https://www.googleapis.com/auth/tasks'),
      'urlshortener' => array('scope' => 'https://www.googleapis.com/auth/urlshortener')
    )
);

if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
	$apiConfig['oauth2_client_id'] = '889267638700-ca9pdja52n9r7fkspps9r33dngeapm3s.apps.googleusercontent.com';
	$apiConfig['oauth2_client_secret'] = '1XcJELFWgikl9i-b5kbQEZNL';
} elseif (strpos($_SERVER['HTTP_HOST'], 'test.fandrop.com') !== false) {
	$apiConfig['oauth2_client_id'] = '889267638700-7fpgq9lufeup8ljj8q8bm41ijoqeec3c.apps.googleusercontent.com';
	$apiConfig['oauth2_client_secret'] = 'nDKVwTBi4ENFGk2w2_-XWsjg';
} elseif (strpos($_SERVER['HTTP_HOST'], 'dmitry.fantoon.com') !== false) {
	$apiConfig['oauth2_client_id'] = '889267638700-1gdr8v4u9elj6schusibik1t1om02qup.apps.googleusercontent.com';
	$apiConfig['oauth2_client_secret'] = 'N7YfVxsvmhR9OvB0Tu4Cp0Oy';
} elseif (strpos($_SERVER['HTTP_HOST'], 'ray.fantoon.com') !== false) {
	$apiConfig['oauth2_client_id'] = '889267638700-87ks1ep3vfhteg4o1rcmesqq8bejf3m9.apps.googleusercontent.com';
	$apiConfig['oauth2_client_secret'] = 'dCun7lkx20rgk9zZEwcyhJ9a';
} else { //production
	$apiConfig['oauth2_client_id'] = '889267638700.apps.googleusercontent.com';
	$apiConfig['oauth2_client_secret'] = '1sqxEopsVos-Yvso_7CgPxZe';
}