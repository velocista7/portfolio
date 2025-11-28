<?
	$_dep = array(2,1);
	$_tit = array('WORKS','Select 커스텀');
	//$_txt = array('작업소스 정리');
	include_once "../../../inc/common.php";
	include_once PATH."/inc/top.sub.php";
?>

<div class="worksTitle">
	<h4><?=$_tit[1]?></h4>
</div>

<style>
/* the code below is for the dropdown heading */
.selectBox {
  background-color: #1c2028; 
  border-radius: 15px;
  padding: 20px;
  box-sizing: border-box;
  width: 100% !important;
}

h10 {
  font-size: 12px;
  letter-spacing: 0.8px;
  color: #999;
  font-family: Arial !important;
}

.selText {  
  color: #81828b;
  margin-bottom: 10px;
  font-family: Gilroy-Regular !important;
}

/* the code below is for the dropdown menu */
.selDrop {
  position: relative;
  display: inline-block;
  width: 100%;
  background: #1c2028;
  text-align: left;
  color: #fff;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-family: Arial;
}

.selDrop > span{font-size: 15px;color: #ddd;}


.scrollable-menu {
  height: auto;
  max-height: 200px;
  overflow-x: hidden;
}

.selectBox .arrow {
  margin-left: 10px;
  margin-right: 10px;
  float: right;
  rotate: 180deg;
}

svg {
  transition: all 0.3s;
}

.selDrop::before {
  position: absolute;
  top: 50%;
  right: 16px;
  margin-top: -2px;
  border-width: 6px 6px 0 6px;
  border-style: solid;
  border-color: #fff transparent;
}

.rotated {
  transform: rotate(-180deg);
}

.selDrop .dropdown {
  transition: 0.3s;
  width: 100%;
  position: absolute;
  top: 90%;
  right: 0;
  left: -20px;
  list-style: none;
  z-index: 99;
  border-radius: 15px;
  box-shadow: inherit;
  background: inherit;
  -webkit-transform-origin: top;
  -moz-transform-origin: top;
  -ms-transform-origin: top;
  transform-origin: top;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  opacity: 0;
  visibility: hidden;
}

.selDrop .dropdown li {
  padding: 0 15px;
  line-height: 45px;
  overflow: hidden;
}

.selDrop .dropdown li:last-child {
  border-bottom: none;
}

.dropdown {
  padding: 20px;
}

.selDrop .dropdown li:hover {
  background-color: rgb(35, 40, 49);
  border-radius: 10px;
}

.selDrop.active .dropdown {
  opacity: 1;
  visibility: visible;

  border-radius: 15px;
}

.selList{display: flex;margin: -10px;}
.selList > li{width: 50%;display: inline-flex;justify-content: center;align-items: center;padding: 10px;}
</style>

<!-- There are two dropdowns to show multi-menu support -->
<ul class="selList">
    <li>
        <div class="selectBox">
        <div class="selText">
            <h10>Description</h10>
        </div>
            <div class="selDrop" id="dropdown">
            <span class="selected-display" id="destination">Pick an option!</span>
            <svg class="arrow" id="drp-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition-all ml-auto rotate-180">
                <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <ul class="dropdown">
                <li class="item">Option 1</li>
                <li class="item">Option 2</li>
                <li class="item">Option 3</li>
                <li class="item">Option 4</li>
            </ul>
        </div>    
        </div>
    </li>

    <li>
        <div class="selectBox">
        <div class="selText">
            <h10>Description</h10>
        </div>
            <div class="selDrop" id="dropdown">
            <span class="selected-display" id="destination">Pick an option!</span>
            <svg class="arrow" id="drp-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition-all ml-auto rotate-180">
                <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <ul class="dropdown">
                <li class="item">Option 1</li>
                <li class="item">Option 2</li>
                <li class="item">Option 3</li>
                <li class="item">Option 4</li>
            </ul>
        </div>    
        </div>
    </li>
</ul>


   

<script>
const selectedAll = document.querySelectorAll(".selDrop");

selectedAll.forEach((selected) => {
  const optionsContainer = selected.children[2];
  const optionsList = selected.querySelectorAll("div.selDrop li");

  selected.addEventListener("click", () => {
    let arrow = selected.children[1];

    if (selected.classList.contains("active")) {
      handleDropdown(selected, arrow, false);
    } else {
      let currentActive = document.querySelector(".selDrop.active");

      if (currentActive) {
        let anotherArrow = currentActive.children[1];
        handleDropdown(currentActive, anotherArrow, false);
      }

      handleDropdown(selected, arrow, true);
    }
  });

  // update the display of the dropdown
  for (let o of optionsList) {
    o.addEventListener("click", () => {
      selected.querySelector(".selected-display").innerHTML = o.innerHTML;
    });
  }
});

// check if anything else ofther than the dropdown is clicked
window.addEventListener("click", function (e) {
  if (e.target.closest(".selDrop") === null) {
    closeAllDropdowns();
  }
});

// close all the dropdowns
function closeAllDropdowns() {
  const selectedAll = document.querySelectorAll(".selDrop");
  selectedAll.forEach((selected) => {
    const optionsContainer = selected.children[2];
    let arrow = selected.children[1];

    handleDropdown(selected, arrow, false);
  });
}

// open all the dropdowns
function handleDropdown(dropdown, arrow, open) {
  if (open) {
    arrow.classList.add("rotated");
    dropdown.classList.add("active");
  } else {
    arrow.classList.remove("rotated");
    dropdown.classList.remove("active");
  }
}
</script>

<?php
	include_once PATH."/inc/tail.sub.php";
?>
