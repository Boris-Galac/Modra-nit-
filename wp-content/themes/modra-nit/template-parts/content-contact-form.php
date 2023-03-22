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
                                    echo "<p class='mail-msg success-message'>Hvala na poruci!</p>";
                                } else {
                                    echo "<p class='mail-msg error-message'>Došlo je do pogreške prilikom slanja poruke. Molimo pokušajte ponovno.</p>";
                                }
                            }
                            ?>

                            <form class="d-grid p-1" method="post">
                                <div class="contact-form__input">
                                    <label for="full-name">Ime i Prezime</label>
                                    <input
                                        type="text"
                                        id="full-name"
                                        name="full-name"
                                        placeholder="John Smith"
                                        required
                                        aria-required="true"
                                        class="contact-form__input-element"
                                    />
                                </div>
                                <div class="contact-form__input">
                                    <label for="email">Email:</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        placeholder="mail@gmail.com"
                                        required
                                        aria-required="true"
                                        class="contact-form__input-element"
                                    />
                                </div>
                                <div class="contact-form__input">
                                    <label for="message">Vaša poruka:</label>
                                    <textarea
                                        id="message"
                                        name="message"
                                        rows="4"
                                        placeholder="Ostavite nam poruku..."
                                        required
                                        role="textbox"
                                        aria-required="true"
                                        class="contact-form__input-element"
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