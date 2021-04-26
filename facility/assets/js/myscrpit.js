function AddData(data){
     var cousrename = data['coursename'].value;
     var ProjectName = data['ProjectName'].value;
     var SellPrice = data['SellPrice'].value;
     var purchaserprice = data['purchaserprice'].value;
     var selectcat = data['selectcat'].value;
     var ShortDiscretion = data['ShortDiscretion'].value;
     var LongDiscretion = data['LongDiscretion'].value;
     var Thumbnailimage = data['Thumbnailimage'].value;
     var coursedetailsfile = data['coursedetailsfile'].value;
     var thumbExe = ["png","jpg","jprg"];
     var fileExe = ["pdf","doc"];
    if(cousrename.trim() == "" || SellPrice.trim() == ""||purchaserprice.trim() == "" ||
    selectcat.trim() == "" || ShortDiscretion.trim() == "" ||LongDiscretion.trim() == "" )
    {return false;}
    var imgext = Thumbnailimage.split('.').pop();
    var fileext = coursedetailsfile.split('.').pop();
    if(arraycontainsturtles = (thumbExe.indexOf(imgext) > -1)){
        if(arraycontainsturtles = (fileExe.indexOf(fileext) > -1)){
           return true;
        }else{
            document.getElementById('errorfile').innerHTML ="File Must Be PDF AND DOC";
        }
     }
    else{
           document.getElementById('error').innerHTML ="Image File Must JPG,JPEG,PNG";
        }
    return false;  
}

function confirmDelete(self){
    // alert("function run");
    var id = self.getAttribute("data-id");
    document.getElementById("form-delete-user").deleteid.value = id;
    $("#myModal").modal("show");
}