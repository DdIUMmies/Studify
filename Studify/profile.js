<script>
  function myFunction(x) {
    x.classList.toggle("fa-thumbs-down");
    x.classList.toggle("fa-thumbs-up");
  }
  var btn= document.getElementById("btn");
  function Toggle(){
    if(btn.classList.contains("far")){
      btn.classList.remove("far");
      btn.classList.add("fas");
    }else {
        btn.classList.remove("fas");
      btn.classList.add("far");

      }
  }
</script>