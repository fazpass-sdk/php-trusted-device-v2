<?php
include 'fazpass.php';
try {
    $privateKeyPath = __DIR__ . '/../src/key/sample.key';
    $fazpass = new Fazpass($privateKeyPath);
    $encryptedData = 'SW4RUxAiZGrs0uT/gCNm9ghu0IDriEu60QMOJtQy3Dw9UeBwdZUda8xSK7PqzDVPdCk5ThPDzTg1S9utLQU6ndoIrV4JkXe8cVQJGmracJlHDubble4A7OLvoE7nHdgS4qIpsYi6FsYhWORNvkdk8k26cxEA2dGoF16D0TEJJVorXooO4bAaV53cejVAo3NK1LX/j1/0iB1GmYPPDdeyCGSLPsG3YdkSMAsmAA8uhord+/wx1KCzwG7sqKk7dcHxwtqfb8OzBAXHWkB/OdhBNiRNs40hgxXl1aAtOyR6bWhEOSFTc+UnAlEspVfEP/nxfTNHsFEEt47ntpxI43pdDAJeFDHILTnmZx7C7w2qt7JNAo7KZyEUFoSi+LAOadQ8UNES/i6jwh/fVbH7Rl3Xh+3xy9WBnNr0hq57Yo0wMiCy45UtDVypz3seGQx7+Z/vxVaH8wc7ZF85K/BRcs7l4JZOux3ilhJCaPIJIQL5zPIlS53Qfm14SdjhgMOQ9DSBJvW2Gdx+YDS5Gv5tCZBO4pTnCGopBnXHh+HCnEtMDjXy9g0Ri6iOt8z2FUsu+xcNG0R86R9N1B9QK7e0/tt5bzhOk85ywqH8g/6GunbVZlInPX8H5IZTDMFhMzuOgUyby568apDSq5r3sHlNFC6if3TEmEa4KmFRCbqd1NsrgVaHPyczxqHESlwlWmJiV0iT23lP4gT65vH0iiIhYP+OKYHimKYLbYKvaV1Ss1Pel5/WL4BpQcfWm6TMvzfsAy1HOGYH9J1PkZn6eB5TYXil2HBaKMIyf9BZATg9cxv5LvhQhVRpkxepiUCrkoqII1h6kskHuY961trKhaNCLi0ZjNZrSJTtykUOsq2FuImfLZroC2ibD5hr49TbaQWL/6pGn+3Yak9rv6OAQ0HipqchmxoHvJWC5np71rZyR+X2t5cOAKE9mMJTqTM9f+PKa9exaWjqGL9ANbscMKFEqfjJBh/9q+Ahtv/+4GodLBGP/EBNk/0VMqAEUVsZL+7EUVJzTc+3G0ZAUTFHWCTRG3HLQdYzHv0/98QbWPBGiaF5urb26+4PSqVjEl+dCFII98hZudEou0EH26t43xqhem9ykpmN71BuumdEfAhfmZx3KdIpd2T3wQlN+p6hUKayAkkY6L3gRdVUIM3+ZpoGZgxxtLVU74dfHXA3SaHxCussJOnYM+X+p0ozYcFlmTLbbpCRz38kfGXoPVG4nZGhNwN36T7mJFAfW0VOlD3pSJeVCyN6f7xpK/5PqWXzB9ZjZ5Kgrmyin/fpVgYPmVUR3VI5v6By8SiuoLXDH3JAN8GqurBVFPUE1lqyPZpnYFWwkNd5e2tMn3Xat9BYUl9p7MY8Ng=='; // Ganti dengan data terenkripsi Anda
    $result = $fazpass->extract($encryptedData);
    echo "Hasil Ekstraksi:\n";
    print_r($result->challenge);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>