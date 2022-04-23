</article>
</section>
<footer>
    <h5>Contents in this page are based on educational sites and the information may vary from other sites... All rights reserved to e-Learning&trade;</h5>
</footer>
</body>
<script>
    function validate_regn() {
        var pwd = f.pwd.value
        var cpwd = f.cpwd.value
        var userid = f.userid.value
        var useridp = /^\w+\.?\w+\@\w+\.([a-z]{3}|[a-z]{2}\.[a-z]{2,3}){1}$/
        
        if(!userid.match(useridp)) {
            alert("Invalid e-Mail Id")
            f.userid.focus()
            return false
        }
        if(pwd!=cpwd) {
            alert("Confirm password not match")
            f.cpwd.focus()
            return false
        }
        return true
    }
    
    function check() {
        var a1 = f.ans1.value
        var a2 = f.ans2.value
        var a3 = f.ans3.value
        var a4 = f.ans4.value
        var c = f.cans.value
        
        if(c!=a1 && c!=a2 && c!=a3 && c!=a4) {
            alert("Correct Choice not matches the above Answers")
            f.cans.focus()
            return false
        }
        return true
    }
    
    
	var d = document.getElementById("ttimer")
	var mm=59
	var ss=59
    function call_timer() {
        if(d!=null) {
	d.innerHTML = "Time Remaining : "+mm+":"+ss

	if(mm==0)
	window.location="index.php"

	ss--
	if(ss<0) {
		ss=59
		mm--
	}
	if(ss<10)
	ss = "0"+ss
	window.setTimeout("call_timer()","1000")
        }
    }

</script>
</html>