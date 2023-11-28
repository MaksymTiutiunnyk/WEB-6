const notifications = document.querySelector(".notifications");

function createToast(data) {
	
	const toast = document.createElement("li");
	toast.className = "toast";
	
	toast.innerHTML = `<div class="column">
							<span>${data}</span>
						</div>`;
	
	notifications.appendChild(toast);

	
	setTimeout(() => {
	  removeToast(toast);
	}, 6000);
} 

function removeToast(toast) {
	toast.classList.add("hide");
	setTimeout(() => toast.remove(), 500);
}

function createSeveralToasts(data, previousLength) {
	for(let i = 0; i < data.length - previousLength; ++i)
		createToast(data[i]);
}

async function update(previousLength) {
	let response = await fetch('get.php');
	let data = await response.json();

	if(data.length > previousLength) {
		createSeveralToasts(data, previousLength);
	}
	setTimeout(() => update(data.length), 3000);
}
