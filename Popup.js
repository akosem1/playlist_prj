class Popup {
	constructor (title, labelPlayListName, labelPlayListUrl) {
		this.titleMsg = title;
		this.labelPlayListName = labelPlayListName;
		this.labelPlayListUrl = labelPlayListUrl;
	}

	build () {
		cl(this);
		setTimeout(function () {cl(this)}.bind(this), 100)
		this.container = document.createElement('div');
		this.container.id = 'container';

		var containerNewPlayList = document.createElement('div');
		containerNewPlayList.id = 'containerNewPlayList';
		containerNewPlayList.classList.add('box');
		this.container.appendChild(containerNewPlayList);

		var title = document.createElement('h2');
		title.textContent = this.titleMsg;
		containerNewPlayList.appendChild(title);
		document.body.appendChild(this.container);	



		var labelPlayListName = document.createElement('label');
		labelPlayListName.id = 'labelPlayListName';
		labelPlayListName.textContent = this.labelPlayListName;
		containerNewPlayList.appendChild(labelPlayListName);

		var newPlayListName = document.createElement('input');
		newPlayListName.id = 'newPlayListName';
		containerNewPlayList.appendChild(newPlayListName);
		

		var labelPlayListUrl = document.createElement('label');
		labelPlayListUrl.id = 'labelPlayListUrl';
		labelPlayListUrl.textContent = this.labelPlayListUrl;
		containerNewPlayList.appendChild(labelPlayListUrl);

		var newPlayListUrl = document.createElement('input');
		newPlayListUrl.id = 'newPlayListUrl';
		containerNewPlayList.appendChild(newPlayListUrl);
		
		var newPlayListNameNextBtn = document.createElement('button');
		newPlayListNameNextBtn.id = 'newPlayListNameNextBtn';
		newPlayListNameNextBtn.textContent = 'Next';
		newPlayListNameNextBtn.addEventListener('click', this.remove.bind(this));
		containerNewPlayList.appendChild(newPlayListNameNextBtn);
		
		var newPlayListNameCancelBtn = document.createElement('button');
		newPlayListNameCancelBtn.id = 'newPlayListNameCancelBtn';
		newPlayListNameCancelBtn.textContent = 'Cancel';
		newPlayListNameCancelBtn.addEventListener('click', this.remove.bind(this));
		containerNewPlayList.appendChild(newPlayListNameCancelBtn);




	}

	remove () {
		cl(this);
		this.container.remove();
	}
}