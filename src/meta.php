<?php
class Meta{
    public $challenge;
    public $fazpassId;
    public $isActive;
    public $scoring;
    public $riskLevel;
    public $timeStamp;
    public $platform;
    public $isRooted;
    public $isEmulator;
    public $isGpsSpoof;
    public $isAppTempering;
    public $isVpn;
    public $biometric;
    public $isCloneApp;
    public $isScreenSharing;
    public $isDebug;
    public $application;
    public $device;
    public $simSerial = [];
    public $simOperator = [];
    public $geolocation = [];
    public $clientIp;
    public $linkedDevices = [];
    public $isNotifiable;
}

class Device {
    public $name;
    public $osVersion;
    public $series;
    public $cpu;
    public $id;
}


class Biometric {
    public $level;
    public $isChanging;

}
?>