<?php $show_title="도움말 - $OJ_NAME"; ?>
<?php include("template/$OJ_TEMPLATE/header.php");?>
<div class="padding">
    <h1 class="ui center aligned header">도움말</h1>
    <div style="font-content">
        <h2 class="ui header">평가 및 측정</h2>
        <p>
            <br> C++ 는 <code>g++ 9.3.0</code>으로 컴파일되고, 명령은
            &nbsp;<code>g++ -fno-asm -Wall -lm --static -std=c++11 -DONLINE_JUDGE -o Main Main.cc</code>입니다.
            <br> C 는 <code>gcc 9.3.0</code>으로 컴파일되고, 명령은
            &nbsp;<code>gcc Main.c -o Main -fno-asm -Wall -lm --static -std=c99 -DONLINE_JUDGE</code>를 사용할 수 있습니다. <code>#pragma GCC optimize ("O2")</code>를 사용하여 수동으로 O2 최적화를 켜십시요.
            <br> Pascal은 <code>fpc 3.0.4</code>로 컴파일되었으며, 명령은
            &nbsp;<code>fpc Main.pas -oMain -O1 -Co -Cr -Ct -Ci</code>입니다.
            <br> Java 는 <code>OpenJDK 11.0.9.1</code>로 컴파일러되고, 명령어
            <code>	javac -J-Xms32m -J-Xmx256m Main.java</code>입니다. 만약 코드에 <code>public class</code>가 없으면，항목 클래스 이름을 <code>Main</code>으로 지정하고 추가로 평가 중 실행시간을 추가로 2초 로 설정하고, 512MB의 실행 메모리를 설정하십시오.
            <br>
            여기에 제공된 컴파일러 버전은 참조용일 뿐입니다. 실제 컴파일러 버전을 확인하십시오.
        </p>
        <p><strong>표준 입출력</strong>을 사용하십시오.</p>

        <h2 class="ui header">개인정보<br></h2>
        <p>이 사이트에서는 프로필 저장 서비스를 제공하지 않고 <a
                href="https://cn.gravatar.com/">Gravatar</a>를 사용하여 프로필을 표시합니다.이메일로 <a href="https://zh-cn.wordpress.com/">WordPress.com</a>에 등록하시고 Gravatar에 로그인하셔서 프로필 사진을 올려주세요.그라바타를 똑같이 사용하는 OJ는 Vijos, COGS, UOJ 등이 있습니다.</p>
        <h2 class="ui header">채점 결과 통지 설명<br></h2>
        <div class="ques-view">
            <p>시험문제의 해답은 제출 후 채점시스템에서 즉시 채점되고, 매 제출마다 채점결과를 즉시 알려줍니다. 시스템에서 가능한 피드백 정보에는 다음과 같은 내용이 포함됩니다.</p>
            <li>평가 대기 중 : 평가 시스템에서 이 내용을 아직 평가하지 못했습니다. 기다려 주십시오.</li>
            <li>평가 중 : 평가 시스템이 평가 중입니다. 결과가 나올 것입니다.</li>
            <li>컴파일 오류 : 제출한 코드가 컴파일을 완료할 수 없습니다. "컴파일 오류" 를 누르면 컴파일러가 출력하는 오류 정보를 볼 수 있습니다.</li>
            <li>정답 : 축하합니다! 이 문제를 통과하셨습니다</li>
            <li>형식 오류: 프로그램이 출력하는 형식이 부적합합니다. (예: 빈칸이나 줄 바꿈과 일치하지 않습니다.)</li>
            <li>답 오류: 프로그램이 평가 시스템의 데이터를 올바른 결과를 반환하지 못했습니다.</li>
            <li>시간 초과 실행: 프로그램 실행이 정해진 시간 내에 종료되지 않았습니다.</li>
            <li>메모리 제한 초과: 프로그램이 제한 이상의 메모리를 사용했습니다.</li>
            <li>실행 오류: 실행 중에 프로그램이 붕괴되었습니다. 단락 오류, 부동점 오류 등이 발생했습니다.</li>
            <li>출력 제한 초과: 프로그램이 너무 많은 내용을 출력합니다. 보통 무한 순환 출력으로 인한 결과일 수 있습니다.</li>
        </div>


        <h2>프로그램 예제</h2>
        <p>다음 샘플 프로그램을 사용하여 이 간단한 문제를 해결할 수 있습니다. <strong>2개의 정수 A와 B를 읽고 그 합을 출력합니다.</strong></p>
        <p><strong>gcc (.c)</strong></p>
        <div class="ui existing segment">
            <pre style="margin-top: 0; margin-bottom: 0; ">
<code class="lang-c">#include &lt;stdio.h&gt;
int main(){
    int a, b;
    while(scanf("%d %d",&amp;a, &amp;b) != EOF){
        printf("%d\n", a + b);
    }
    return 0;
}</code></pre>
        </div>
        <p><strong>g++ (.cpp)</strong></p>
        <div class="ui existing segment">
            <pre style="margin-top: 0; margin-bottom: 0; ">
<code class="lang-c++">#include &lt;iostream&gt;
using namespace std;
int main(){
    int a, b;
    while (cin &gt;&gt; a &gt;&gt; b){
        cout &lt;&lt; a+b &lt;&lt; endl;
    }
    return 0;
}</code></pre>
        </div>
        <p><strong>fpc (.pas)</strong></p>
        <div class="ui existing segment">
            <pre style="margin-top: 0; margin-bottom: 0; ">
<code class="lang-pascal">var
a, b: integer;
begin
    while not eof(input) do begin
        readln(a, b);
        writeln(a + b);
    end;
end.</code></pre>
        </div>
        <p><strong>javac (.java)</strong></p>
        <div class="ui existing segment">
            <pre style="margin-top: 0; margin-bottom: 0; ">
<code class="lang-java">import java.util.Scanner;	
public class Main {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        while (in.hasNextInt()) {
            int a = in.nextInt();
            int b = in.nextInt();
            System.out.println(a + b);
        }
    }
}</code></pre>
        </div>
        <p><strong>python3 (.py)</strong></p>
        <div class="ui existing segment">
            <pre style="margin-top: 0; margin-bottom: 0; ">
<code class="lang-c">import io
import sys
sys.stdout = io.TextIOWrapper(sys.stdout.buffer,encoding='utf8')
for line in sys.stdin:
    a = line.split()
    print(int(a[0]) + int(a[1]))</code></pre>
        </div>
    </div>
</div>
<h3 class="ui center aligned header">
<p>Online Judge 번역은 파파고와 구글번역기를 통해서 했습니다.</p><br>
<p>번역에 문제가 있다면 <strong>daniel(a)knue.ac.kr</strong>또는 <strong>teakhyun(a)o365dge.net</strong>으로 연락 주세요.</p></h3>
<?php include("template/$OJ_TEMPLATE/footer.php");?>
