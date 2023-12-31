<?php
include 'meta.php';
class Fazpass {
    private $privateKey;

    public function __construct($privateKeyPath) {
        $this->initialize($privateKeyPath);
    }

    private function initialize($privateKeyPath) {
        if (empty($privateKeyPath)) {
            throw new Exception("Parameter cannot be empty");
        }

        if (!file_exists($privateKeyPath)) {
            throw new Exception("File not found");
        }

        $privateKey = file_get_contents($privateKeyPath);
        $this->privateKey = openssl_get_privatekey($privateKey);
        if (!$this->privateKey) {
            throw new Exception("Invalid private key");
        }
    }

    public function extract($meta) {
        $decoded = base64_decode($meta);
        if (openssl_private_decrypt($decoded, $decrypted, $this->privateKey)) {
            $dataArray = json_decode($decrypted, true); // Mengembalikan sebagai array asosiatif

            return $this->arrayToMeta($dataArray);
        } else {
            throw new Exception("Invalid meta or key");
        }
    }

    private function arrayToMeta($dataArray) {
        $meta = new Meta();
        // Setiap properti dari Meta
        foreach ($dataArray as $key => $value) {
            if (property_exists($meta, $key)) {
                if ($key === 'device') {
                    $meta->$key = $this->arrayToDevice($value);
                } elseif ($key === 'linkedDevices') {
                    $meta->$key = array_map([$this, 'arrayToDevice'], $value);
                } else {
                    $meta->$key = $value;
                }
            }
        }
        return $meta;
    }

    private function arrayToDevice($array) {
        $device = new Device();
        foreach ($array as $key => $value) {
            if (property_exists($device, $key)) {
                $device->$key = $value;
            }
        }
        return $device;
    }
}
?>