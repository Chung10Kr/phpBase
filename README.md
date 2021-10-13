# PHP 기초

## MAC 설정

MAC에는 기본적으로 apache, php가 설치되어있기 때문에 따로 설치 필요 X

1. 설치된 아파치와 php 버전 확인
```
apachectl -v
php -v

```

2. 아파치 실행
```
sudo apachectl start
```
브라우저에서 localhost 접근
![img](https://github.com/Chung10Kr/phpBase/blob/main/img/img01.png);

이거는 브라우저가 아파치의 '기본 제공 index 페이지'를 열었기 때문

보통 다른 포스팅보면 기본 제공 index 페이지가 있는 DocumentRoot를 수정하라고 하는데 그렇게 하지 않고

userdir를 활성화 할꺼임

# userdir

userdir를 활성화 한다는것은 브라우저에서 localhost/~username/  으로 하겠단 말씀

1. /private/etc/apache2/extra의 httpd-userdir.conf파일 수정
```
# Settings for user home directories
#
# Required module: mod_authz_core, mod_authz_host, mod_userdir

#
# UserDir: The name of the directory that is appended onto a user's home
# directory if a ~user request is received.  Note that you must also set
# the default access control for these directories, as in the example below.
#
UserDir Sites

#
# Control access to UserDir directories.  The following is an example
# for a site where these directories are restricted to read-only.
#
Include /private/etc/apache2/users/*.conf  //주석걸려있으면 해제
<IfModule bonjour_module>
       RegisterUserSite customized-users
</IfModule>

```

2. username.conf 추가
Include /private/etc/apache2/users/의 username.conf 추가
```
<Directory "/Users/username/Sites/">
	Options Indexes MultiViews
	Require all granted
</Directory>
```


3. httpd.conf 수정
mod_authz_core, mod_authz_host, mod_userdir 관련모듈 활성화 

macOS 요세미티 이후로는 mod_authz_host 와 mod_authz_core 모듈은 이미 주석이 제거되어 있으므로, mod_userdir 모듈만 다음과 같이 주석을 제거하여 활성화

```
LoadModule userdir_module libexec/apache2/mod_userdir.so //주석 제거 
```

 httpd-userdir.conf 파일을 ‘불러 오는 (include)’ 부분의 주석도 같이 제거

```
Include /private/etc/apache2/extra/httpd-userdir.conf //주석 제거
```
4. 홈 디렉토리에 Sites폴더 만들기 & index.html 생성

```
/User/username/Sites
```

5. 아파치 재시작
```
sudo apachectl restart
```

6. 확인

localhost/~username/으로 접근

![img](https://github.com/Chung10Kr/phpBase/blob/main/img/img02.png);