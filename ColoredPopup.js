class ColoredPopup extends Popup {
	constructor (title, color, labelPlayListName,labelPlayListUrl) {
		super(title, labelPlayListName,labelPlayListUrl);
		this.titleColor = color;
	}

	build() {
		super.build();
		this.container.style.color = this.titleColor;
		this.labelPlayListName.textContent = this.labelPlayListName;
		this.labelPlayListUrl.textContent = this.labelPlayListUrl;

		 // 'Play List Name:';

		
	}
}