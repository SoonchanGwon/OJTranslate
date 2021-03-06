# Online Judge 한글화 프로젝트

## 1. 온라인저지 설치

온라인 저지 사이트 : https://github.com/zhblue/hustoj

설치 :

Ubuntu 20.04.3 LTS ( https://ubuntu.com/download/desktop )에 설치하였습니다.

<pre><code>wget http://dl.hustoj.com/install-ubuntu20.04.sh
sudo bash install-ubuntu20.04.sh</code></pre>

로 하면 바로 설치가 됩니다. 

스크립트 실행 후 브라우저에 ip주소를 입력하여 바로 접속이 가능하며, 열리지 않을 경우 접속정책 및 방화벽 설정에서 80번 포트가 열려있는지 확인하시기 바랍니다.

## 2. 텍스트 에디어 관리자 권한 주기

언어 설정을 변경하기 위해서 관리자 권한으로 텍스트 에디터를 열 수 있도록 설정합니다. 

<pre><code>sudo apt install nautilus-admin -y
nautilus -q</code></pre>

## 3. 테마를 한글로 설정하기

브라우저를 열였을때 SYZOJ 의 테마가 설정되어 있다면

### 1) db_info.inc.php 한글화 설정하기

<pre><code>sudo gedit /home/judge/src/web/include/db_info.inc.php</code></pre>
를 터미널 창에서 넣고,

18번째 줄의 static  $OJ_LANG="cn";
부분을
<pre><code>static  $OJ_LANG="ko";</code></pre>
로 고쳐줍니다. 

### 2) kindeditor.php 한글화 설정하기

<pre><code>sudo gedit /home/judge/src/web/admin/kindeditor.php</code></pre>
를 터미널 창에서 넣고,

5번째 줄의 
<pre><code><script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script></code></pre>
부분을
<pre><code><script charset="utf-8" src="../kindeditor/lang/ko.js"></script></code></pre>
로 고쳐줍니다.

## 4. git을 이용하여 테마파일 중국어 수정하기

git을 이용하여 다운로드 받은후 파일을 모두 옮겨 줍니다. 
<pre><code>sudo git clone https://github.com/SoonchanGwon/OJTranslate.git
cd OJTranslate
sudo mv -b *.* /home/judge/src/web/template/syzoj</code></pre>

SYZOJ 테마 폴더(home/judge/src/web/template/syzoj)에 설치하였습니다. 

위의 코드를 넣어서 본 파일들을 다운 받아서 덮어쓰시면 됩니다. 
