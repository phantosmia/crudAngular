
var loadFile = function(event) {
output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
};
