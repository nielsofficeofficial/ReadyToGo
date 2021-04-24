<?php 

/**
 * @copyright (c) 2020-2021 PHPHtml-Merge v1.3 Cooked by nielsoffice
 *
 * PHPHtml-Merge v1.3 free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 * @category  CrownPHPExtend - core noHTML
 * @package   - corePHP ( purePHP / no html for Back End PHP DEVELOPER/PROGRAMMER)
 *            - Enjoy free templates
 *            - Docx/Reference
 *            
 * @author    nielfernandez <nieldigitalsolution@gmail.com>
 * @license   http://_source.org/licenses/gpl-3.0.html GNU Public License
 * @link      https://github.com/nielsofficeofficial/PHPHtml-Optimizer
 * @link      https://github.com/nielsofficeofficial/PHPHtml-Optimizer/blob/master/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.3
 *
 */

// Require prop msg and function handler
require_once __DIR__ . '/core/prop.php';
require_once __DIR__ . '/prop.php';

/**
 *
 * Check if the file optimizer is exist!
 * require associated string within Class/Methods/Function
 *
**/
if ( __GET_STATIC_CLASS_HTML__  && __GET_INSTANTIATE_CLASS_HTML__ ) {
     
spl_autoload_register(function ($class) { 

  strncmp(loader_framwork(), $class, strlen(loader_framwork()) ) !== 0 ?  TRUE : FALSE; 

    return require __DIRECTORY_OPTIMIZER_CLASS__ . str_replace('\\', '/', substr($class, strlen(loader_framwork()))) . '.php'; 

  }

); 
   
   file_exists(__FILECONFIG__) ? require_once __FILECONFIG__ : FALSE ;   }  else  {

   // check if there's something wrong directory then return error msg!
   if ( __GET_VALIDATE_FILE_PAGE_EXIST__) {
     /*
      |
      |
      | Perform Error handler 
      |
      |
      */ 
     Html::PERFORM(FILE_HANDLER_MSG);
  }
       	
}   