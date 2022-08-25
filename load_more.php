<a href="#" id="loadMore" style="margin-left:100px;text-align:center;color:white;font-size:15px;font-weight:600;background-color:green;padding:15px;border-radius:15px;">Click To Load More</a>

<style type="text/css">
.single_card:nth-child(n + 4) {
    display: none;
}
#loadMore {
    color: green;
    cursor: pointer;
    font-size: 22px;
    padding: 20px;
}
#loadMore:hover {
    color: black;
}
</style>

<script>
    $(document).ready(function(){
  $(".single_card").slice(0, 12).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".single_card:hidden").slice(0, 12).slideDown();
    if($(".single_card:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
  
})
</script>
