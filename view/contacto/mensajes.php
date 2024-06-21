<style>
    @font-face {
        font-family: 'titulo1';
        src: url("Domine-Bold");
    }

    @font-face {
        font-family: 'titulo3';
        src: url("Marcellus-Regular.ttf");
    }

    @font-face {
        font-family: 'titulo2';
        src: url("Domine-Regular.ttf");
    }

    .map_foot2 {
        border-radius: 15px;  
        border: none;
        width:100%;
        height:600px;
    }

    .contprinc {
        margin-bottom: 80px;
    }

    .contcontainer {
        background: #f6f6f6;
        /* padding: 20px; */
    }

    .contac {
        padding: 30px;
    }

    .contac h1 {
        font-family: titulo3;
        font-weight: 700;
        text-align: center;
        font-size: 3rem;
        color: #1E3C79;
        padding-bottom: 20px;
    }

    .contac p {
        font-family: titulo2;
        /* font-size: 3rem; */
        color: #5b5b5b;
        padding-bottom: 15px;
    }

    .fromcontrol label {
        font-family: titulo1;
        color: #5b5b5b;
    }

    @media(max-width:600px){
        .map_foot2{
            border-radius: 15px;  
        border: none;
        width:100%;
        height:300px;
        }
    }
</style>


<div class="container contprinc ">
    <div class="row contcontainer">
        <div class="col-sm-12 col-md-6 contac">
            <h1>Envíanos un mensaje</h1>
            <p>Te atenderemos a la brevedad posible</p>
            <div class="mb-3 fromcontrol">
                <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3 fromcontrol">
                <label for="exampleFormControlInput1" class="form-label">Correo Electronico:</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3 fromcontrol">
                <label for="exampleFormControlInput1" class="form-label">Asunto:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3 fromcontrol">
                <label for="exampleFormControlTextarea1" class="form-label">Mensaje:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
            </div>
            <div class="mb-3 fromcontrol">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-danger" type="submit">ENVIAR</button>
                   
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 p-3   ">
            <iframe class="map_foot2"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31698.557119180317!2d-79.887572!3d-6.730801!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf31d85eb5c6c3ebe!2sMolinos%20San%20Jorge%20S.A.C!5e0!3m2!1ses!2spe!4v1664796048523!5m2!1ses!2spe" allowfullscreen=""  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>