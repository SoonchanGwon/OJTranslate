# Online Judge 한글화 프로젝트

온라인 저지 사이트 : https://github.com/zhblue/hustoj

설치 :

Ubuntu 20.04.3 LTS ( https://ubuntu.com/download/desktop )에 설치하였습니다.

<pre><code>wget http://dl.hustoj.com/install-ubuntu20.04.sh
sudo bash install-ubuntu20.04.sh</code></pre>

로 하면 바로 설치가 됩니다. 

스크립트 실행 후 브라우저에 ip주소를 입력하여 바로 접속이 가능하며, 열리지 않을 경우 접속정책 및 방화벽 설정에서 80번 포트가 열려있는지 확인하시기 바랍니다.

이후 언어 설정을 변경하기 위해서 관리자 권한으로 텍스트 에디터를 열 수 있도록 설정합니다. 

<pre><code>sudo apt install nautilus-admin -y
nautilus -q</code></pre>


브라우저를 열였을때 SYZOJ 의 테마가 설정되어 있다면

SYZOJ 테마 폴더(home/설정한계정(ex:judge)/src/web/template/syzoj) 에 설치하였습니다. 
에 본 파일들을 다운 받아서 덮어쓰시면 됩니다. 
