// JavaScript Document
function checkAddUserForm()
{
	with (window.document.frmAddUser) {
		if (isEmpty(txtUserName, 'Enter user name')) {
			return;
		} else if (isEmpty(txtPassword, 'Enter password')) {
			return;
		} else {
			submit();
		}
	}
}

function printAll(num)
{
	window.location.href = 'view.php?mod=admin&view=viewReceipt&num='+num;
}

function viewComplainDetail(compId)
{
	window.location.href = 'view.php?mod=admin&view=viewByCompID&compId='+compId;
}

function viewEmployeeComDetail(compId)
{
	window.location.href = 'view.php?mod=employee&view=viewByCompID&compId='+compId;
}

function closeComplain(compId)
{
	window.location.href = 'view.php?mod=employee&view=closeComplain&compId='+compId;
}


function changePassword(userId)
{
	window.location.href = 'index.php?view=modify&userId=' + userId;
}

function deleteEngg(eId)
{
	if (confirm('Do you want to delete this Engineer?')) {
		window.location.href = 'process.php?action=deleteEngg&eId=' + eId;
	}
}
function deleteDept(eId)
{
	if (confirm('Do you want to delete this Department?')) {
		window.location.href = 'process.php?action=deleteDept&eId=' + eId;
	}
}
function deleteStd(Id)
{
	if (confirm('Do you want to delete this Student?')) {
		window.location.href = 'process.php?action=deleteStd&Id=' + Id;
	}
}

function editEnggDetail(eId)
{
	var url = 'view.php?mod=admin&view=doEdit&eId=' + eId;
	//alert(url);
	window.location.href  = url;
}
function editDeptDetail(eId)
{
	var url = 'view.php?mod=admin&view=doEditDept&Id=' + eId;
	//alert(url);
	window.location.href  = url;
}
function editStdDetail(Id)
{
	var url = 'view.php?mod=admin&view=doEditStd&Id=' + Id;
	//alert(url);
	window.location.href  = url;
}

function addGrade(id) {
	var url = 'view.php?mod=employee&view=';
}

function deleteCust(cId)
{
	if (confirm('Do you want to delete this Customer?')) {
		window.location.href = 'process.php?action=deleteCust&cId=' + cId;
	}
}

function editCustDetail(cId)
{
	var url = 'view.php?mod=admin&view=doEditCust&cId=' + cId;
	//alert(url);
	window.location.href  = url;
}

var url3 = 'view.php?mod=employee&view=query'
function yearOne(Id)
{
	var url1 = 'view.php?mod=employee&view=one1st&Id=' + Id;
	var url2 = 'view.php?mod=employee&view=one2nd&Id=' + Id;
	var semester = prompt('What Semester Do you want to edit (please type 1 for ist and 2 for 2nd)')
	//alert(url);
	if(semester =='1')
	{
	window.location.href  = url1;
	} else if(semester == '2'){
		window.location.href  = url2;
		}
		else{window.location.href  = url3;}
}

function yearTwo(Id)
{
	var url1 = 'view.php?mod=employee&view=two1st&Id=' + Id;
	var url2 = 'view.php?mod=employee&view=two2nd&Id=' + Id;
	var semester = prompt('What Semester Do you want to edit (please type 1 for ist and 2 for 2nd) thanks')
	//alert(url);
	if(semester == 1)
	{
	window.location.href  = url1;
	} else if(semester == '2'){
		window.location.href  = url2;
		}
		else{window.location.href  = url3;}
}

function yearThree(Id)
{
	var url1 = 'view.php?mod=employee&view=three1st&Id=' + Id;
	var url2 = 'view.php?mod=employee&view=three2nd&Id=' + Id;
	var semester = prompt('What Semester Do you want to edit (please type 1 for ist and 2 for 2nd) thanks')
	//alert(url);
	if(semester == 1)
	{
	window.location.href  = url1;
	} 
	else if(semester == '2'){
		window.location.href  = url2;
		}
	else{window.location.href  = url3;}
}

function final(Id)
{
	var url1 = 'view.php?mod=employee&view=final1st&Id=' + Id;
	var url2 = 'view.php?mod=employee&view=final2nd&Id=' + Id;
	var semester = prompt('What Semester Do you want to edit (please type 1 for ist and 2 for 2nd) thanks')
	//alert(url);
	if(semester == 1)
	{
	window.location.href  = url1;
	} else if(semester == '2'){
		window.location.href  = url2;
		}
		else{window.location.href  = url3;}
}

function printDetails(Id)
{
	var url = 'resultPage.php?Id=' + Id;		
	window.location.href  = url;
	
}

