class Localizacion{
    constructor(callback){
        if(navigator.geolocation){
            //obtenemos ubicacion
            navigator.geolocation.getCurrentPosition((position)=>{
                this.latitude = position.coords.latitude;
                this.longitud = position.coords.longitude;

                callback();
            });
        } else {
            alert("Fail :)");
        }
    }
}