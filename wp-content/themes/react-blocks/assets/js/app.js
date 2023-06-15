const toggles = document.querySelectorAll( '.sub-menu-btn' );
const toggles2 = document.querySelectorAll( '.sub-2' );
const toggles_mobile = document.querySelectorAll('.mobile-sub-menu-btn');
const open_menu = document.getElementById( 'open' );
const close_menu = document.getElementById( 'close' );
const close_banner = document.getElementById( 'close-banner' );
const header_banner = document.querySelector( '.upper-header-banner' );

const header = document.getElementById( 'masthead' );
open_menu.addEventListener( 'click', () => {
	header.classList.add( 'open' );
} );
close_menu.addEventListener( 'click', () => {
	header.classList.remove( 'open' );
} );

function toggleAccord( e ) {
	e.preventDefault();
	if ( this.parentNode.classList.contains( 'active' ) ) {
		this.parentNode.classList.remove( 'active' );
	} else {
		for ( i = 0; i < toggles.length; i++ ) {
			toggles[ i ].parentNode.classList.remove( 'active' );
		}
		this.parentNode.classList.add( 'active' );
	}
}


function toggleAccord2( e ) {
	e.preventDefault();
	if ( this.parentNode.classList.contains( 'active-sub' ) ) {
		this.parentNode.classList.remove( 'active-sub' );
	} else {
		for ( i = 0; i < toggles2.length; i++ ) {
			toggles2[ i ].parentNode.classList.remove( 'active-sub' );
		}
		this.parentNode.classList.add( 'active-sub' );
	}
}
for ( i = 0; i < toggles.length; i++ ) {
	toggles[ i ].addEventListener( 'click', toggleAccord );
}


for ( i = 0; i < toggles2.length; i++ ) {
	toggles2[ i ].addEventListener( 'click', toggleAccord2 );
}
if ( document.getElementById( 'popup' ) !== null ) {
	const popup_modal = document.querySelector( '.popup' );
	const popup = document.getElementById( 'popup' );
	const elements = document.getElementsByClassName( 'more' );
	const popup_content = document.querySelector( '#popup .popup-container' );
	const popup_image = document.querySelector( '#popup .popup-container .leader-image' );
	const popup_leader_info = popup_content.querySelector( '.leader-info' );
	const close_button = document.querySelector( '.close-popup' );
	const popupOpen = function( e ) {
		e.preventDefault();
		popup_modal.classList.add( 'active' );
		const leader_content = this.parentNode.querySelector( '.leader-popup-text' ).textContent;
		const leader_image = this.parentNode.previousElementSibling.getAttribute( 'src' );
		const leader_name = this.parentNode.querySelector( '.leader-name' ).textContent;
		const leader_position = this.parentNode.querySelector( '.leader-position' ).textContent;
		popup_image.setAttribute( 'src', leader_image );
		popup_leader_info.querySelector( '.leader-name' ).textContent += leader_name;
		popup_leader_info.querySelector( '.leader-description' ).textContent += leader_content;
		popup_leader_info.querySelector( '.leader-position' ).textContent += leader_position;
	};

	for ( var i = 0; i < elements.length; i++ ) {
		elements[ i ].addEventListener( 'click', popupOpen, false );
	}
	const popupClose = function() {
		popup_modal.classList.remove( 'active' );
		popup_leader_info.querySelector( '.leader-name' ).textContent = '';
		popup_leader_info.querySelector( '.leader-description' ).textContent = '';
		popup_leader_info.querySelector( '.leader-position' ).textContent = '';
	};
	close_button.addEventListener( 'click', popupClose, false );
}

function banner_close() {
	header_banner.classList.add( 'closed_banner' );
}
if ( close_banner !== null ) {
	close_banner.addEventListener( 'click', banner_close, false );
}
const close_video = document.getElementById( 'close-video' );
const videos = document.querySelectorAll( '.video-hook' );
const video_popup = document.getElementById( 'video-popup' );
const video_empower = document.getElementById( 'empower-video' );
const sources = video_empower.getElementsByTagName( 'iframe' );
const iframe = document.querySelector( 'iframe' );

function updateSrc( pos, arr, src ) {
	return arr[ pos ] ? arr[ pos ].src = src : false;
}

function openVideo( e ) {
	const video_src = this.getAttribute( 'video-data' );
	console.log( video_src );
	updateSrc( 0, sources, video_src );
	video_popup.classList.add( 'activated' );
	const player = new Vimeo.Player( iframe );
	player.play();
}

for ( var i = 0; i < videos.length; i++ ) {
	videos[ i ].addEventListener( 'click', openVideo, false );
}

function stopVideo( element ) {
	const iframe = element.querySelector( 'iframe' );
	const video = element.querySelector( 'video' );
	if ( iframe ) {
		const iframeSrc = iframe.src;
		iframe.src = iframeSrc;
	}
	if ( video ) {
		video.pause();
	}
}

function closeVideo() {
	const player = new Vimeo.Player( iframe );
	player.pause();
	video_popup.classList.remove( 'activated' );
}

close_video.addEventListener( 'click', closeVideo, false );

const acc = document.getElementsByClassName( 'drop-down-info' );
var i;

for ( i = 0; i < acc.length; i++ ) {
	acc[ i ].addEventListener( 'click', function() {
		this.classList.toggle( 'active' );
		const panel = this.nextElementSibling.nextElementSibling;
		if ( panel.style.maxHeight ) {
			panel.style.maxHeight = null;
		} else {
			panel.style.maxHeight = panel.scrollHeight + 'px';
		}
	} );
}

const acc2 = document.getElementsByClassName( 'mobile-sub-menu-btn' );
var i;

for (i = 0; i < acc2.length; i++) {
	acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.display === "block") {
			panel.style.display = "none";
		} else {
			panel.style.display = "block";
		}
	});
}

const resource_media_tab_link = document.getElementsByClassName('resource-media-tab-link');
var i;

const tabWrapper = document.querySelector(".tab-wrapper");
const tabBtns = document.querySelectorAll(".tab-btn");
const tabContents = document.querySelectorAll(".tab-contents .content");

tabWrapper.addEventListener("click", (e) => {
	const id = e.target.dataset.target;
	if (id) {
		// remove active from other buttons
		tabBtns.forEach((btn) => {
			btn.classList.remove("active");
			e.target.classList.add("active");
		});
		// hide other tabContents
		tabContents.forEach((content) => {
			content.classList.remove("active");
		});
		const currentContent = document.getElementById(id);
		currentContent.classList.add("active");
	}
});
