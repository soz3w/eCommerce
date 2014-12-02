<?php
class Helper_config
{
	private $data;
	private $fileIni;
/*-----------------------------------------
* Constructeur  clientFromHell.net
*--------------------------------------*/
	public function __construct($iniFileName="config.ini",$withSection=true)
	{
		
		$this->loadFile($iniFileName,$withSection=true);
	}
/*--------------------------------
 * loadFile charge le fichier ini
 *-------------------------------*/
	public function loadFile($iniFileName,$withSection=true)
	{
		if (file_exists($iniFileName))
		{
			$this->data = parse_ini_file($iniFileName,$withSection);
			$this->fileIni =$iniFileName;

		}
		else
		{
			error_log("$iniFileName not found");
		}
	}

/*--------------------------------
 * get renvoie une valeur de key avec section ou pas
 *-------------------------------*/

	public function get($key,$section=null)
	{
		date_default_timezone_set('Europe/Paris');
		$dt =date("Y-m-d H:i");

		if (isset($section))
			{
				if (isset($this->data[$section][$key]))
				{
					return $this->data[$section][$key];
				}
				else
				{
					error_log("$dt key $key not found in section $section in file $this->fileIni \n",3,"error.log");
					trigger_error("key $key not found in section $section in file $this->fileIni \n",E_USER_NOTICE);
				}
			}
		else
			{
				if (isset($this->data[$key]))
				{
					return $this->data[$key];
				}
				else
				{
					error_log("$dt key $key not found in file $this->fileIni \n",3,"error.log");
					trigger_error("key $key not found in file $this->fileIni \n",E_USER_NOTICE);
				}
			}

		
	}
	
}