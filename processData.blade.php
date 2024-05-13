<style>
button {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
}

</style>

<!DOCTYPE html>
    <button id="processDataBtn">Process Data</button>
    <div id="emiDetails"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#processDataBtn').click(function(){
        $.ajax({
            url: '/processData',
            type: 'POST',
            success: function(data) {
                $('#emiDetails').html(data);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>