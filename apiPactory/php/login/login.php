<?php
    include "../connection/connection.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/logintemp.css">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="wrap">
        <header id="header">
            <div id="logos">
                <div id="logo"></div>
                <div id="title">
                    <h2><a href="http://meowon1019.dothome.co.kr/">apiPactory</a></h2>
                </div>
                <div id="menu">
                    <ul>
                        <li><a href="#">api 상품</a></li>
                        <li><a href="#">카테고리</a></li>
                        <li><a href="#">공지사항</a></li>
                    </ul>
                </div>
            </div>
            <div id="controller">
                <div id="searchBar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="검색어를 입력하세요" class="search-input">
                </div>
                <div id="profile"></div>
            </div>
        </header>

        
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->             
                <h2 class="underlineHover" class="active"> 로그인 </h2>
                <h2 class="underlineHover"> 회원가입 </h2>

              

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="../../../assets/img/logo2.png" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form action="loginAction.php" name="loginAction" method="post" id="logInForm">
                    <input type="text" id="userEmail" name="userEmail" placeholder="이메일을 입력하세요.">
                    <input type="password" id="userPass" name="userPass" placeholder="비밀번호를 입력하세요.">
                    <input type="submit" value="로그인">
                </form>

                <form id="signInForm">
                    <div class="Check">
                        <input type="text" id="youID"  name="youID">
                        <label for="youID" >아이디</label>
                        <div class="btn" onclick="IDChecking()">아이디 중복검사</div>
                    </div>
                    <div class="Check">
                        <input type="text" id="youName"  name="youName">
                        <label for="youName" >이름</label>
                    </div>
                    <div class="Check">
                        <input type="password" id="youPass"  name="youPass">
                        <label for="youName" >비밀번호</label>
                    </div>
                    <div class="Check">
                        <input type="password" id="youPassC"  name="youPassC">
                        <label for="youName" >확인</label>
                    </div>
                    <div class="Check">
                        <input type="text" id="youPhone"  name="youPhone">
                        <label for="youName" >전화번호</label>
                    </div>
                    <input type="submit"value="다음">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">아이디, 비밀번호가 생각나지 않습니다.</a>
                </div>

            </div>
        </div>
    </div>
    <script>
        var loginBox = document.querySelector('.outBox');
        var loginInputBox = document.querySelector('#sampleId');
        loginInputBox.addEventListener('keyup', function(){
            if(!loginInputBox.value == ''){
                loginBox.classList.add('existence');   
            }else{
                loginBox.classList.remove('existence');   
            }
        });
    </script>
    <script>
            document.addEventListener("DOMContentLoaded", function () {
                const tabBtns = document.querySelectorAll(".underlineHover"); // 탭 버튼
                const tabContents = document.querySelectorAll("#signInForm, #logInForm"); // 콘텐츠
                
                // 로그인과 회원가입 폼 중에서 로그인 폼을 먼저 보여줍니다.
                tabContents[1].style.display = "none";

                tabBtns.forEach(function (tabBtn, index) {
                    tabBtn.addEventListener("click", function () {
                        // 클릭한 버튼의 인덱스를 가져옵니다.
                        const clickedIndex = index;

                        // 현재 클릭한 버튼에 active 클래스를 추가하고 다른 형제 요소들에게서 active 클래스를 제거합니다.
                        tabBtns.forEach(function (btn) {
                            btn.classList.remove("active");
                        });
                        tabBtn.classList.add("active");

                        // 클릭한 버튼과 같은 인덱스의 콘텐츠를 표시하고 다른 콘텐츠는 숨깁니다.
                        tabContents.forEach(function (tabContent, contentIndex) {
                            if (contentIndex === clickedIndex) {
                                tabContent.style.display = "block";
                            } else {
                                tabContent.style.display = "none";
                            }
                        });
                    });
                });
            });
    </script>
</body>

</html>