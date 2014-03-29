<?php
/**
 * Copyright (c) 1978-2014 MAVAJ SUN CO, Inc. All Rights Reserved.
 *
 * This software is the confidential and proprietary information of MAVAJ SUN
 * CO, Inc. ("Confidential Information"). You shall not disclose such
 * Confidential Information and shall use it only in accordance with the terms
 * of the license agreement you entered into with MAVAJ SUN CO.
 *
 * THIS SOFTWARE IS PROVIDED "AS IS," WITHOUT A WARRANTY OF ANY KIND . ALL
 * EXPRESS OR IMPLIED CONDITIONS, REPRESENTATIONS AND WARRANTIES, INCLUDING ANY
 * IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE OR
 * NON-INFRINGEMENT, ARE HEREBY EXCLUDED. MAVAJ SUN CO AND ITS LICENSORS SHALL
 * NOT BE LIABLE FOR ANY DAMAGES SUFFERED BY LICENSEE AS A RESULT OF USING ,
 * MODIFYING OR DISTRIBUTING THE SOFTWARE OR ITS DERIVATIVES. IN NO EVENT WILL
 * MAVAJ SUN CO OR ITS LICENSORS BE LIABLE FOR ANY LOST REVENUE, PROFIT OR
 * DATA,OR FOR DIRECT,INDIRECT, SPECIAL, CONSEQUENTIAL, INCIDENTAL OR PUNITIVE
 * DAMAGES, HOWEVER CAUSED AND REGARDLESS OF THE THEORY OF LIABILITY, ARISING
 * OUT OF THE USE OF OR INABILITY TO USE SOFTWARE, EVEN IF SUN HAS BEEN ADVISED
 * OF THE POSSIBILITY OF SUCH DAMAGES.
 *
 * This software is not designed or intended for use in on-line control of
 * aircraft, air traffic, aircraft navigation or aircraft communications; or in
 * the design, construction, operation or maintenance of any nuclear facility.
 * Licensee represents and warrants that it will not use or redistribute the
 * Software for such purposes.
 *
 *
 * @author  : MavajSunCo (Ali Jamali)
 * @Email   : info@MavajSunCo.com
 * @Website : www.MavajSunCo.com
 * @Date    : MAR-29-2012
 * @version : 1.0
 *
 * @Decsriptoin : Database connection , Username & build connection for whole project . 
 */

$db_host = "127.0.0.1"; // Database URL 
// Place the username for the MySQL database here 
$db_username = "root";
// Place the password for the MySQL database here 
$db_password = "password";
// Place the name for the MySQL database here 
$db_name = "phptest";

// Run the connection here   
$myConnection = mysqli_connect("$db_host", "$db_username", "$db_password", "$db_name") or die("could not connect to mysql");
// Now you can use the variable $myConnection to connect in your queries      
?> 