<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.0                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2011                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2011
 * $Id$
 *
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Core_DAO_Domain extends CRM_Core_DAO
{
    /**
     * static instance to hold the table name
     *
     * @var string
     * @static
     */
    static $_tableName = 'civicrm_domain';
    /**
     * static instance to hold the field values
     *
     * @var array
     * @static
     */
    static $_fields = null;
    /**
     * static instance to hold the FK relationships
     *
     * @var string
     * @static
     */
    static $_links = null;
    /**
     * static instance to hold the values that can
     * be imported / apu
     *
     * @var array
     * @static
     */
    static $_import = null;
    /**
     * static instance to hold the values that can
     * be exported / apu
     *
     * @var array
     * @static
     */
    static $_export = null;
    /**
     * static value to see if we should log any modifications to
     * this table in the civicrm_log table
     *
     * @var boolean
     * @static
     */
    static $_log = false;
    /**
     * Domain ID
     *
     * @var int unsigned
     */
    public $id;
    /**
     * Name of Domain / Organization
     *
     * @var string
     */
    public $name;
    /**
     * Description of Domain.
     *
     * @var string
     */
    public $description;
    /**
     * Backend configuration.
     *
     * @var text
     */
    public $config_backend;
    /**
     * The civicrm version this instance is running
     *
     * @var string
     */
    public $version;
    /**
     * FK to Location Block ID. This is specifically not an FK to avoid circular constraints
     *
     * @var int unsigned
     */
    public $loc_block_id;
    /**
     * list of locales supported by the current db state (NULL for single-lang install)
     *
     * @var text
     */
    public $locales;
    /**
     * Locale specific string overrides
     *
     * @var text
     */
    public $locale_custom_strings;
    /**
     * class constructor
     *
     * @access public
     * @return civicrm_domain
     */
    function __construct()
    {
        parent::__construct();
    }
    /**
     * returns all the column names of this table
     *
     * @access public
     * @return array
     */
    function &fields()
    {
        if (!(self::$_fields)) {
            self::$_fields = array(
                'id' => array(
                    'name' => 'id',
                    'type' => CRM_Utils_Type::T_INT,
                    'required' => true,
                ) ,
                'name' => array(
                    'name' => 'name',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Name') ,
                    'maxlength' => 64,
                    'size' => CRM_Utils_Type::BIG,
                ) ,
                'description' => array(
                    'name' => 'description',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Description') ,
                    'maxlength' => 255,
                    'size' => CRM_Utils_Type::HUGE,
                ) ,
                'config_backend' => array(
                    'name' => 'config_backend',
                    'type' => CRM_Utils_Type::T_TEXT,
                    'title' => ts('Config Backend') ,
                    'rows' => 20,
                    'cols' => 80,
                ) ,
                'version' => array(
                    'name' => 'version',
                    'type' => CRM_Utils_Type::T_STRING,
                    'title' => ts('Version') ,
                    'maxlength' => 32,
                    'size' => CRM_Utils_Type::MEDIUM,
                ) ,
                'loc_block_id' => array(
                    'name' => 'loc_block_id',
                    'type' => CRM_Utils_Type::T_INT,
                ) ,
                'locales' => array(
                    'name' => 'locales',
                    'type' => CRM_Utils_Type::T_TEXT,
                    'title' => ts('Locales') ,
                ) ,
                'locale_custom_strings' => array(
                    'name' => 'locale_custom_strings',
                    'type' => CRM_Utils_Type::T_TEXT,
                    'title' => ts('Locale Custom Strings') ,
                    'rows' => 20,
                    'cols' => 80,
                ) ,
            );
        }
        return self::$_fields;
    }
    /**
     * returns the names of this table
     *
     * @access public
     * @return string
     */
    function getTableName()
    {
        return self::$_tableName;
    }
    /**
     * returns if this table needs to be logged
     *
     * @access public
     * @return boolean
     */
    function getLog()
    {
        return self::$_log;
    }
    /**
     * returns the list of fields that can be imported
     *
     * @access public
     * return array
     */
    function &import($prefix = false)
    {
        if (!(self::$_import)) {
            self::$_import = array();
            $fields = & self::fields();
            foreach($fields as $name => $field) {
                if (CRM_Utils_Array::value('import', $field)) {
                    if ($prefix) {
                        self::$_import['domain'] = & $fields[$name];
                    } else {
                        self::$_import[$name] = & $fields[$name];
                    }
                }
            }
        }
        return self::$_import;
    }
    /**
     * returns the list of fields that can be exported
     *
     * @access public
     * return array
     */
    function &export($prefix = false)
    {
        if (!(self::$_export)) {
            self::$_export = array();
            $fields = & self::fields();
            foreach($fields as $name => $field) {
                if (CRM_Utils_Array::value('export', $field)) {
                    if ($prefix) {
                        self::$_export['domain'] = & $fields[$name];
                    } else {
                        self::$_export[$name] = & $fields[$name];
                    }
                }
            }
        }
        return self::$_export;
    }
}