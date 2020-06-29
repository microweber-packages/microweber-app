<?php
namespace MicroweberPackages\BackupManager\Loggers;

final class BackupImportLogger extends BackupDefaultLogger
{
	public static $logName = 'Importing';
	public static $logFileName = 'backup-import-session.log';
	
}