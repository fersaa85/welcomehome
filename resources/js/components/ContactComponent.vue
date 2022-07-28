<template>
    <section class="panel color4-alt contact">
        <div class="inner columns divided">
            <div class="span-3-25">
                <div class="alert alert-success text-center" role="alert" v-if="isSending">
                    Se ha enviado el mensaje exitosamente.
                </div>
                <form method="post" action="#"  @submit.prevent="sendEmail">
                    <h2 class="display-moviel text-center title-contact">¿Quieres que te contactemos?</h2>
                    <div class="fields">
                        <div class="field half">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" v-model="contact.name" />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" v-model="contact.email"/>
                        </div>
                        <div class="field">
                            <label for="message">Mensaje</label>
                            <textarea name="message" id="message" rows="4" v-model="contact.message"></textarea>
                        </div>
                        <div class="field">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" v-model="contact.info">
                            <label class="form-check-label" for="exampleCheck1">¿Deseas recibir información y promociones de WH?</label>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="¿Quieres que te contactemos?" class="button primary hidden-moviel" :disabled="isDisabled" /></li>
                        <li><input type="submit" value="Enviar" class="button primary display-moviel" :disabled="isDisabled" /></li>
                    </ul>
                    <div class="text-center">
                        <a href="./assets/Aviso de privacidad WH.pdf" target="_blank">Aviso de privacidad</a>
                    </div>
                </form>
            </div>
            <div class="span-1-75">
                <h5 class="margin-cero"><strong>Jhanne  Cruz</strong></h5>
                <p class="margin-cero">Comercial</p>
                <p class="margin-cero"><span class="icon brands fa-whatsapp"></span>
                    <a href="https://wa.me/525631139624" target="_blank" class="color-white">56 31 13 96 24</a></p>
                <p class="margin-cero"><span class="icon brands fa-envelope"></span>
                    <a href="mailto:jhanne@welcomehome.com.mx?Subject=Contacto" target="_blank" class="color-white"> jhanne@welcomehome.com.mx</a></p>

                <p></p>
                <h5 class="margin-cero"><strong>Sandra  Pascacio </strong></h5>
                <p class="margin-cero">Producción</p>
                <p class="margin-cero"><span class="icon brands fa-whatsapp"></span>
                    <a href="https://wa.me/525631139624"  target="_blank" class="color-white">56 31 13 96 24</a></p>
                <p class="margin-cero"><span class="icon brands fa-envelope"></span>
                    <a href="mailto:sandra@welcomehome.com.mx?Subject=Contacto" target="_blank" class="color-white"> sandra@welcomehome.com.mx</a></p>

            </div>
        </div>
    </section>
</template>
<script>
    export default {
        mounted() {
            console.log('GalleryCOmponent.vue')
        },
        props: {
            title: String,
            text: String,
            items: {
                type: Array,
            },
        },
        data: function() {
            return {
                isDisabled: false,
                contact: {
                    name: '',
                    email: '',
                    message: '',
                    info: '',
                    infoMenssage: ''
                },


                isSending: false,
                validName: false,
                validCompany: false,
                validEmail: false
            }
        },
        methods: {
            sendEmail: function () {
                console.log('sendEmail');
                this.isDisabled = true;
                if (this._validate(this.contact)) { // POST /someUrl
console.log('sendEmail validate');
                    this.$http.get('contacto', this.contact)
                        .then(response => {
                        this.contact = {
                            name: '',
                            email: '',
                            message: '',
                            info: '',
                            infoMenssage: ''
                        }
                            console.log('sendEmail contact');

                        this.isSending = true
                        setTimeout(() => this.isSending = false, 5000);
                        this.isDisabled = false;
                    }, response => {
                        // error callback
                        console.log('sendEmail',response )
                        this.isDisabled = false;
                    });
                }

                console.log('if not');
            },

            _validate: function (contact) {
                this.validEmail = false;
                this.validCompany = false;
                this.validName = false;

                let error = false;
                if (!contact.name) {
                    this.validName = true;
                    error = true;
                }
                if (!contact.email) {
                    this.validEmail = true;
                    error = true;
                }
                if (!this._validateEmail(contact.email)) {
                    this.validEmail = true;
                    error = true;
                }

                if (error) {
                    return;
                }

                return true;

            },

            _validateEmail: function (email) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            },
        }

    }
</script>