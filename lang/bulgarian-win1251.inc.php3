<?php
/* $Id$ */

$charset = 'windows-1251';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = '������� ������';
$strAction = '��������';
$strAddDeleteColumn = '������/������ ������ �� ��������';
$strAddDeleteRow = '������/������ ��� �� ��������';
$strAddNewField = '������ ���� ����';
$strAddPriv = 'Add a new Privilege'; //to translate
$strAddPrivMessage = 'You have added a new privilege.'; //to translate
$strAddSearchConditions = '������ ������� �� ������� (���� �� "where" �������):';
$strAddUser = 'Add a new User'; //to translate
$strAddUserMessage = 'You have added a new user.'; //to translate
$strAfter = 'After'; //to translate
$strAll = 'All'; //to translate
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnalyzeTable = 'Analyze table'; //to translate
$strAnd = '�';
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAscending = '��������';
$strAtBeginningOfTable = 'At Beginning of Table'; //to translate
$strAtEndOfTable = 'At End of Table'; //to translate
$strAttr = '��������';

$strBack = '�����';
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'Bookmarked SQL-query'; //to translate
$strBookmarkThis = 'Bookmark this SQL-query'; //to translate
$strBookmarkView = 'View only'; //to translate
$strBrowse = '��������';

$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.'; //to translate
$strCarriage = '������ CR: \\r';
$strChange = '�������';
$strCheckAll = 'Check All'; //to translate
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = 'Check table'; //to translate
$strColumn = 'Column'; //to translate
$strColumnEmpty = 'The columns names are empty!'; //to translate
$strColumnNames = '�������� �� ������';
$strCompleteInserts = 'Complete inserts'; //to translate
$strConfirm = 'Do you really want to do it?'; //to translate
$strCopyTable = '������� ��������� �';
$strCopyTableOK = '������� %s ���� �������� � %s.';
$strCreate = '������';
$strCreateNewDatabase = '������ ���� ��';
$strCreateNewTable = '������ ���� ������� � �� ';
$strCriteria = '��������';

$strData = 'Data'; //to translate
$strDatabase = '�� ';
$strDatabases = '���� �����';
$strDataOnly = 'Data only'; //to translate
$strDbEmpty = 'The database name is empty!'; //to translate
$strDefault = '�� ������������';
$strDelete = '������';
$strDeleted = '����� ���� ������';
$strDeleteFailed = 'Deleted Failed!'; //to translate
$strDescending = '��������';
$strDisplay = 'Display'; //to translate
$strDoAQuery = '������� "��������� �� ������" (������ ��  ����������: "%")';
$strDocu = '������������';
$strDoYouReally = '������������ �� ������� ';
$strDrop = '�������';
$strDropDB = '������� �� ';
$strDumpingData = '���� (�����) �� ������� � ���������';
$strDynamic = 'dynamic'; //to translate

$strEdit = '�����������';
$strEditPrivileges = 'Edit Privileges'; //to translate
$strEffective = 'Effective'; //to translate
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ����� ������ �������� (�.�. ���� ������).';
$strEnclosedBy = '��������� � ';
$strEnd = '����';
$strError = '������';
$strEscapedBy = '������ Escape';
$strExtra = '������������';

$strField = '����';
$strFields = '������';
$strFixed = 'fixed'; //to translate
$strFormat = 'Format'; //to translate
$strFunction = '�������';

$strGenTime = 'Generation Time'; //to translate
$strGo = '�������';
$strGrants = 'Grants'; //to translate

$strHasBeenAltered = '���� ���������.';
$strHasBeenCreated = '���� ���������.';
$strHome = '������';
$strHomepageOfficial = 'Official phpMyAdmin Homepage'; //to translate
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page'; //to translate
$strHost = '����';
$strHostEmpty = 'The host name is empty!'; //to translate

$strIfYouWish = '��� ������� �� �������� ���� ����� ������ �� ���������, ������� ������ �� �������� ��������� ��� �������.';
$strIndex = '������';
$strIndexes = 'Indexes'; //to translate
$strInsert = '������';
$strInsertAsNewRow = 'Insert as new row'; //to translate
$strInsertIntoTable = '������ � ���������';
$strInsertNewRow = '������ ��� ���';
$strInsertTextfiles = '������ �������� ������� � ���������';
$strInUse = 'in use'; //to translate

$strKeyname = '��� �� �����';
$strKill = 'Kill'; //to translate

$strLength = 'Length'; //to translate
$strLengthSet = 'Length/Values*'; //to translate
$strLimitNumRows = 'records per page'; //to translate
$strLineFeed = '������ �� ���� �� ���: \\n';
$strLines = '������';
$strLocationTextfile = '����������������� �� ��������� ����';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = '����� �� ���������';

$strModifications = '��������� ���� ���������';
$strModify = '������';
$strMySQLReloaded = 'MySQL � ����������.';
$strMySQLSaid = 'MySQL ��������: ';
$strMySQLShowProcess = '������ ���������';
$strMySQLShowStatus = '������ ����������� �� MySQL';
$strMySQLShowVars = '������ ���������� ���������� �� MySQL';

$strName = '���';
$strNext = '�������';
$strNo = '��';
$strNoPassword = 'No Password'; //to translate
$strNoPrivileges = 'No Privileges'; //to translate
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strNoTablesFound = '� �� ���� �������.';
$strNoUsersFound = 'No user(s) found.'; //to translate
$strNull = '����';
$strNumberIndexes = ' Number of advanced indexes '; //to translate

$strOftenQuotation = '���������� �������. �� ����� ��������, �� ���� ������ char � varchar �� ��������� � �������.';
$strOptimizeTable = 'Optimize table'; //to translate
$strOptionalControls = '�� �����. ���������� ��� �� �� ����� ��� ����� ��������� �������.';
$strOptionally = '�� �����';
$strOr = '���';
$strOverhead = 'Overhead'; //to translate

$strPassword = 'Password'; //to translate
$strPasswordEmpty = 'The password is empty!'; //to translate
$strPasswordNotSame = 'The passwords aren\'t the same!'; //to translate
$strPHPVersion = 'PHP Version'; //to translate
$strPos1 = '������';
$strPrevious = '��������';
$strPrimary = '��������';
$strPrimaryKey = '�������� ����';
$strPrinterFriendly = 'Printer friendly version of above table'; //to translate
$strPrintView = 'Print view'; //to translate
$strPrivileges = 'Privileges'; //to translate
$strProducedAnError = '������ �� ������.';
$strProperties = '��������';

$strQBE = '��������� �� ������';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php3)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php3)

$strReadTheDocs = '������� ��������������';
$strRecords = '������';
$strReloadFailed = '��������� ���� �� ������������ �� MySQL.';
$strReloadMySQL = '��������� MySQL';
$strRememberReload = 'Remember reload the server.'; //to translate
$strRenameTable = '����������� ��������� ��';
$strRenameTableOK = '������� %s ���� ������������ �� %s';
$strRepairTable = 'Repair table'; //to translate
$strReplace = '�������';
$strReplaceTable = '������� ������� �� ��������� � ������� �� �����';
$strReset = '�������';
$strReType = 'Re-type'; //to translate
$strRevoke = 'Revoke'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for'; //to translate
$strRevokeMessage = 'You have revoked the privileges for'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Row length'; //to translate
$strRows = 'Rows'; //to translate
$strRowsFrom = 'rows starting from'; //to translate
$strRowsStatistic = 'Row Statistic'; //to translate
$strRunning = '��������� �� ';
$strRunQuery = '������� �����������';

$strSave = '������';
$strSelect = '������';
$strSelectFields = '������ ���� (������� ����):';
$strSelectNumRows = '� �����������';
$strSend = '�������';
$strSequence = 'Seq.'; //to translate
$strServerVersion = 'Server version'; //to translate
$strShow = '������';
$strShowingRecords = '������� ������ ';
$strSingly = '(singly)'; //to translate
$strSize = 'Size'; //to translate
$strSort = '��������';
$strSpaceUsage = 'Space usage'; //to translate
$strSQLQuery = 'SQL-���������';
$strStatement = 'Statements'; //to translate
$strStrucCSV = 'CSV �����';
$strStrucData = '��������� � �����';
$strStrucDrop = '������ \'������ ���������\'';
$strStrucOnly = '���� �����������';
$strSubmit = '�������';
$strSuccess = '������ SQL-��������� ���� ��������� �������';
$strSum = 'Sum'; //to translate

$strTable = '������� ';
$strTableComments = '��������� ��� ���������';
$strTableEmpty = 'The table name is empty!'; //to translate
$strTableMaintenance = 'Table maintenance'; //to translate
$strTableStructure = '��������� �� �������';
$strTableType = 'Table type'; //to translate
$strTerminatedBy = '��������� ��';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable '; //to translate
$strTheContent = '������������ �� ����� ���� �����������.';
$strTheContents = '������������ �� ����� �������� ������������ �� ��������� �� ������ � ��������� �������� ��� �������� �������.';
$strTheTerminator = '������ �� ���� �� ����.';
$strTotal = '������';
$strType = '���';

$strUncheckAll = 'Uncheck All'; //to translate
$strUnique = '��������';
$strUpdateQuery = '������� �����������';
$strUsage = 'Usage'; //to translate
$strUser = 'User'; //to translate
$strUserEmpty = 'The user name is empty!'; //to translate
$strUserName = 'User name'; //to translate
$strUsers = 'Users'; //to translate
$strUseTables = '��������� ���������';

$strValue = '��������';
$strViewDump = '������ ���� (�����) �� ���������';
$strViewDumpDB = '������ ���� (�����) �� ��';

$strWelcome = '����� ����� � ';
$strWrongUser = '������ ���/������. ������� ������.';

$strYes = '��';

// automatic generated by langxlorer.php (June 27, 2001, 6:53 pm)
// V0.11 - experimental (Steve Alberty - alberty@neptunlabs.de)
$strBinary = ' Binary ';  //to translate
$strBinaryDoNotEdit = ' Binary - do not edit ';  //to translate
$strEnglishPrivileges = ' Note: MySQL privilege names are expressed in English ';  //to translate
$strNotNumber = 'This is not a number!';  //to translate
$strNotValidNumber = ' is not a valid row number!';  //to translate

// export Zip (July 07, 2001, 19:48am)
$strBzip = '"bzipped"';
$strGzip = '"gzipped"';  //to translate
$strZip = '"zipped"';  //to translate

// To translate
$strAffectedRows = 'Affected rows:';
$strDatabasesStats = 'Databases statistics';//to translate
$strDeletedRows = 'Deleted rows:';
$strDisplayOrder = 'Display order:';
$strDropTable = 'Drop table';
$strExtendedInserts = 'Extended inserts';
$strFieldsEmpty = ' The field count is empty! ';  //to translate
$strFormEmpty = 'Missing value in the form !';
$strFullText = 'Full Texts';//to translate
$strIdxFulltext = 'Fulltext';  //to translate 
$strInsertedRows = 'Inserted rows:';
$strInstructions = 'Instructions';//to translate
$strInvalidName = '"%s" is a reserved word, you can\'t use it as a database/table/field name.'; //to translate
$strNbRecords = 'no. of records';
$strNoDatabases = 'No databases';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoModification = 'No change';
$strPartialText = 'Partial Texts';//to translate
$strPmaDocumentation = 'phpMyAdmin Documentation';//to translate 
$strQueryOnDb = 'SQL-query on database ';
$strRowSize = ' Row size ';  //to translate
$strRunningAs = 'as';
$strServerChoice = 'Server Choice';//to translate 
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Show all'; // to translate
$strShowCols = 'Show columns';
$strShowPHPInfo = 'Show PHP information';  // To translate
$strShowTables = 'Show tables';
$strShowThisQuery = ' Show this query here again ';  //to translate
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strTables = '%s table(s)';  //to translate
$strUseBackquotes = 'Use backquotes with tables and fields\' names';
$strWithChecked = 'With checked:';
$strAPrimaryKey = 'A primary key has been added on %s';//to translate
$strAnIndex = 'An index has been added on %s';//to translate
$strFieldHasBeenDropped = 'Field %s has been dropped';//to translate
$strFieldsEnclosedBy = 'Fields enclosed by';//to translate
$strFieldsEscapedBy = 'Fields escaped by';//to translate
$strFieldsTerminatedBy = 'Fields terminated by';//to translate
$strIndexHasBeenDropped = 'Index %s has been dropped';//to translate
$strLinesTerminatedBy = 'Lines terminated by';//to translate
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped';//to translate
$strRunSQLQuery = 'Run SQL query/queries on database %s';//to translate
$strStartingRecord = 'Starting record';//to translate
$strTableHasBeenDropped = 'Table %s has been dropped';//to translate
$strTableHasBeenEmptied = 'Table %s has been emptied';//to translate
$strDeleteUserMessage = 'You have deleted the user %s.';//to translate
$strKeepPass = 'Do not change the password';//to translate
$strUpdatePrivMessage = 'You have updated the privileges for %s.';//to translate
$strUpdateProfile = 'Update profile:';//to translate
$strUpdateProfileMessage = 'The profile has been updated.';//to translate
$strDatabaseHasBeenDropped = 'Database %s has been dropped.';  //to translate
$strNoQuery = 'No SQL query!';  //to translate
?>
