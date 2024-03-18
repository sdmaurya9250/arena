<form onsubmit="download(this.email.value,this.system.value)" id="form">
    <input type="email" id="email" name="email" placeholder="Please enter email" required>
    <input type="radio" name="system" value="Win" required >Windows
    <input type="radio" name="system" value="Osx" >Osx
    <input type="submit" class="btn"  value="Download"> 
</form>

<script type="text/javascript">
document.getElementById("form").addEventListener("submit", function(event){
    event.preventDefault();
});

function download(email_value,sys_value){
    location.href='http://s/index.php?page=download'+sys_value+'&email='+email_value;
}
</script>