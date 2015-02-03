<?php
/*
 * This file is part of Jorani.
 *
 * Jorani is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jorani is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jorani.  If not, see <http://www.gnu.org/licenses/>.
 */

    //You can change the content of this template
?>
<html lang="km">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
    </head>
    <body>
        <h3>{Title}</h3>
        សូមស្វាគមន៍មកកាន់ Jorani {Firstname} {Lastname} <a href="{BaseURL}">សូមប្រើប្រាស់ព័ត៌មានបញ្ជាក់អត្តសញ្ញាណទាំងនេះដើម្បីចូលទៅកាន់ប្រព័ន្ធ</a> :
        <table border="0">
            <tr>
                <td>ឈ្មោះ</td><td>{Login}</td>
            </tr>
            <tr>
                <?php if ($this->config->item('ldap_enabled') == FALSE) { ?>
                <td>លេខសំងាត់</td><td>{Password}</td>
                <?php } else { ?>
                <td>លេខសំងាត់</td><td><i>The password you use in order to open a session on your operating system (Windows, Linux, etc.).</i></td>
                <?php } ?>
            </tr>            
        </table>
        <?php if ($this->config->item('ldap_enabled') == FALSE) { ?>
        <a href="http://www.leave-management-system.org/how-to-change-my-password.html" title="តំណភ្ជាប់ទៅឯកសារ" target="_blank">នៅពេលដែលបានភ្ជាប់អ្នកអាចផ្លាស់ប្តូរពាក្យសម្ងាត់របស់អ្នកជាការពន្យល់នៅទីនេះ</a>.
        <?php } ?>
    </body>
</html>
