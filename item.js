var removeCartItemButtons = document.getElementsByClassName('remove');
console.log(removeCartItemButtons);
for(var i = 0; i < removeCartItemButtons.length; i++)
	{
		var button = removeCartItemButtons[i]
		button.addEventListener('click', function(event){
			var buttonclicked = event.target
			buttonclicked.parentElement.parentElement.remove()
		})
	}
function upd