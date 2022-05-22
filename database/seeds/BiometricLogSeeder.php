<?php

use Illuminate\Database\Seeder;

class BiometricLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // BiometricLogs::insert($this->jsonLogs());
        $logs = '[{
            "id": "1",
            "user_id": "666",
            "date": "2022-03-16 03:32:41",
            "device_ip": "192.168.1.1"
          }, {
            "id": "2",
            "user_id": "666",
            "date": "2022-03-16 15:48:42",
            "device_ip": "192.168.1.1"
          }, {
            "id": "3",
            "user_id": "666",
            "date": "2022-03-16 15:51:25",
            "device_ip": "192.168.1.1"
          }, {
            "id": "4",
            "user_id": "21",
            "date": "2022-03-16 15:53:14",
            "device_ip": "192.168.1.1"
          }, {
            "id": "5",
            "user_id": "1",
            "date": "2022-03-16 16:00:39",
            "device_ip": "192.168.1.1"
          }, {
            "id": "6",
            "user_id": "1",
            "date": "2022-03-16 16:03:19",
            "device_ip": "192.168.1.1"
          }, {
            "id": "7",
            "user_id": "1",
            "date": "2022-03-16 16:08:12",
            "device_ip": "192.168.1.1"
          }, {
            "id": "8",
            "user_id": "1",
            "date": "2022-03-16 16:08:13",
            "device_ip": "192.168.1.1"
          }, {
            "id": "9",
            "user_id": "1",
            "date": "2022-03-16 16:08:14",
            "device_ip": "192.168.1.1"
          }, {
            "id": "10",
            "user_id": "1",
            "date": "2022-03-16 16:08:16",
            "device_ip": "192.168.1.1"
          }, {
            "id": "11",
            "user_id": "1",
            "date": "2022-03-16 16:34:14",
            "device_ip": "192.168.1.1"
          }, {
            "id": "12",
            "user_id": "1",
            "date": "2022-03-16 16:53:50",
            "device_ip": "192.168.1.1"
          }, {
            "id": "13",
            "user_id": "3",
            "date": "2022-03-16 17:57:32",
            "device_ip": "192.168.1.1"
          }, {
            "id": "14",
            "user_id": "3",
            "date": "2022-03-16 17:57:55",
            "device_ip": "192.168.1.1"
          }, {
            "id": "15",
            "user_id": "3",
            "date": "2022-03-17 11:42:28",
            "device_ip": "192.168.1.1"
          }, {
            "id": "16",
            "user_id": "1",
            "date": "2022-03-22 11:18:32",
            "device_ip": "192.168.1.1"
          }, {
            "id": "17",
            "user_id": "1",
            "date": "2022-03-22 11:18:33",
            "device_ip": "192.168.1.1"
          }, {
            "id": "18",
            "user_id": "1",
            "date": "2022-03-22 11:19:18",
            "device_ip": "192.168.1.1"
          }, {
            "id": "19",
            "user_id": "1",
            "date": "2022-03-22 11:55:45",
            "device_ip": "192.168.1.1"
          }, {
            "id": "20",
            "user_id": "1",
            "date": "2022-03-22 12:56:26",
            "device_ip": "192.168.1.1"
          }, {
            "id": "21",
            "user_id": "2",
            "date": "2022-03-22 12:56:32",
            "device_ip": "192.168.1.1"
          }, {
            "id": "22",
            "user_id": "111",
            "date": "2022-03-22 17:04:57",
            "device_ip": "192.168.1.1"
          }, {
            "id": "23",
            "user_id": "1",
            "date": "2022-03-25 12:56:54",
            "device_ip": "192.168.1.1"
          }]';

          $array = json_decode($logs, true);
          
        \DB::table('biometric_logs')->insert($array);
    }
}
