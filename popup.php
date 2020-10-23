<html>
  <head>
    <title>안전관리시스템</title>
    <script language="JavaScript">
    function setCookie(name, value, expiredays) {
        var date = new Date();
        date.setDate(date.getDate() + expiredays);
        document.cookie = escape(name) + "=" + escape(value) + "; expires=" + date.toUTCString();
    }

    function closePopup() {
        if (document.getElementById("check").value) {
            setCookie("popupYN", "N", 1);
            self.close();
        }
    }
</script>


    <style>
    h2{text-align: center;}
    </style>

  </head>
  <body>
    <h2>[공지사항]</h2><br>
    <p>
    10.08.(목)일자로 하반기 안전교육(정기, 신규)이<br>
    진행될 예정이오니 참고하여 주시기 바랍니다.<br><br>
    </p>
    <P>
    신규 교육 : 13:30 ~ 14:30<br>
    정기 교육 : 15:00 ~ 16:00<br>
    장소 : 대구가톨릭대학교 산학협력단 3층 세미나실<br><br>

    <input type="checkbox" id="check" onclick="closePopup();">
   <fontsize=3> <b>하루에 한번만 보기</b> </font>
    </p>
  </body>
</html>
