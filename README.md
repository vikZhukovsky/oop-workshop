## Usage by console
````
Ip Geolocation Informer
Usage:
  gendiff (-h|--help)
  gendiff [--format <data format> --ip <ip address>]
Options:
  -h --help                     Show this screen
  --format <data format>        Responded format [default: json]
  --ip <ip address>             Requested ip address
````

## Usage by Class
````
$ipInformer = new IpInformer();
$data = $ipInformer->takeInformation();
````