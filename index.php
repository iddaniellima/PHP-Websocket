<script>
var conn = new WebSocket('ws://projeto-iddaniellima.codeanyapp.com:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
};
</script>