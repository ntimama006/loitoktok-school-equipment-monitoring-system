
const check=document.getElementById('check')
const pass=document.getElementById('pass')
const popDelete=document.getElementById('popDelete')
const popview=document.getElementById('popView')


function toggllePass() {
    if (check.checked) {
        pass.type="text";
    }else{
        pass.type="password";
    }
    
}

function showPop() {
    popDelete.classList.remove('hide')
    popDelete.classList.add('popDelete')
}

function openPopView(){
    popview.classList.remove('hidden');
}