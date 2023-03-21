<?php
                            if (isset($_POST['submit'])) {
                                $to = "boris.modranit@gmail.com";
                                $subject = "Nova poruka s kontakt forme";
                                $name = $_POST['full-name'];
                                $email = $_POST['email'];
                                $message = $_POST['message'];
                                $headers = "From: " . $name . "<" . $email . ">\r\n";
                                $headers .= "Reply-To: " . $email . "\r\n";
                                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

                                $mailBody = "
                                <html>
                                    <head>
                                        <title>" . $subject . "</title>
                                    </head>
                                    <body>
                                        <p>Ime i prezime: " . $name . "</p>
                                        <p>Email: " . $email . "</p>
                                        <p>Poruka: " . $message . "</p>
                                    </body>
                                </html>";

                                if (mail($to, $subject, $mailBody, $headers)) {
                                    echo "<p class='success-message'>Hvala na poruci!</p>";
                                } else {
                                    echo "<p class='error-message'>Došlo je do pogreške prilikom slanja poruke. Molimo pokušajte ponovno.</p>";
                                }
                            }
                            ?>

<form class="contact-form p-1" method="post">
                  <h4 class="h4--heading">kontaktirajte nas</h4>
                  <br />
                  <div class="contact-form__row">
                    <div class="contact-form__input">
                      <label class="contact-form__input-label" for="name"
                        >Vaše ime i prezime</label
                      >
                      <input
                        class="contact-form__input-element p-05"
                        type="text"
                        name="name"
                        id="name"
                        placeholder="John Doe"
                      />
                    </div>
                    <div class="contact-form__input">
                      <label class="contact-form__input-label" for="mail"
                        >Vaš email</label
                      >
                      <input
                        class="contact-form__input-element p-05"
                        type="email"
                        name="mail"
                        id="mail"
                        placeholder="mail@gmail.com"
                      />
                    </div>
                  </div>
                  <div class="contact-form__input">
                    <label class="contact-form__input-label" for="mail"
                      >Vaša poruka</label
                    >
                    <textarea
                      class="contact-form__input-element p-05"
                      name="message"
                      id="message"
                      cols="30"
                      rows="10"
                      placeholder="Ostavite svoju poruku..."
                    ></textarea>
                  </div>
                  <button
                    type="submit"
                    class="contact-form__input-submit flex-center"
                    name="submit"
                  >
                    <div class="svg-wrapper-1">
                      <div class="svg-wrapper">
                        <svg
                          height="24"
                          width="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path d="M0 0h24v24H0z" fill="none"></path>
                          <path
                            d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <span>Pošaljite upit</span>
                  </button>
                </form>