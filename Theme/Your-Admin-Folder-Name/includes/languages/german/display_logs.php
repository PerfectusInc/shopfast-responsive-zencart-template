<?php
define('HEADING_TITLE', 'Error Logfiles anzeigen');
define('TABLE_HEADING_FILENAME', 'Dateiname');
define('TABLE_HEADING_MODIFIED', 'geändert am');
define('TABLE_HEADING_FILESIZE', 'Dateigröße (bytes)');
define('TABLE_HEADING_DELETE', 'Löschen?');
define('TABLE_HEADING_ACTION', 'Aktion');
define('BUTTON_DELETE_SELECTED', 'button_delete_selected.gif');
define('DELETE_SELECTED_ALT', 'Alle ausgewählten Dateien löschen');
define('BUTTON_DELETE_ALL', 'button_delete_all.gif');
define('DELETE_ALL_ALT', 'Lösche alle Dateien der aktuellen Ansicht');
define('ICON_INFO_VIEW', 'Inhalt dieser Datei anzeigen');
define('TEXT_HEADING_INFO', 'Inhalt der Datei');
define('TEXT_MOST_RECENT', 'neueste');
define('TEXT_OLDEST', 'ältestes');
$imageName = zen_image(DIR_WS_IMAGES . 'icon_info.gif', ICON_INFO_VIEW);
define('TEXT_INSTRUCTIONS', '<br /><br />Die Dateien können entweder in aufsteigender oder absteigender Reihenfolge nach dem letzten Änderungsdatum sortiert werden, indem Sie auf den <em>' . TABLE_HEADING_MODIFIED . '</em> Link klicken. Klicken Sie auf das ' . $imageName . ' Infosymbol, um den Inhalt der jeweiligen Datei anzuzeigen.  Es werden nur die ersten %u bytes der Datei ausgelesen; falls das Logfilesehr gross ist, wird seine Dateigröße <span class="bigfile">rot</span> hervorgehoben.<br /><br />Anklicken des Buttons <strong>Alle löschen</strong> löscht alle Logfiles der aktuellen Ansicht. Anklicken des Buttons <strong>Ausgewählte löschen</strong> löscht nur die angekreuzten Logfiles.<br /><br />Derzeitige Ansicht: %s %u von %u Logfiles.<br />');
define('JS_MESSAGE_DELETE_ALL_CONFIRM', 'Wollen Sie diese \'+n+\' Dateien wirklich löschen?');
define('JS_MESSAGE_DELETE_SELECTED_CONFIRM', 'Wollen Sie die ausgewählten Dateien wirklich löschen?');
define('WARNING_NOT_SECURE','<span class="errorText">HINWEIS: Sie haben SSL nicht aktiviert. Der Inhalt der Logfiles, die Sie über diese Seite anzeigen wird nicht verschlüsselt übertragen, das stellt ein Sicherheitsrisiko dar!</span>');
define('WARNING_NO_FILES_SELECTED', 'Es wurden keine Dateien zum Löschen ausgewählt!');
define('WARNING_SOME_FILES_DELETED', 'Warnung: Nur %u von %u Logfiles wurden gelöscht; überprüfen Sie die Dateiberechtigungen.');
define('SUCCESS_FILES_DELETED', '%u Logfiles wurden gelöscht.');