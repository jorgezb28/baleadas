<html>
<link rel="stylesheet" href="style/style.css">

<body>
    <p><img style="display: block; margin-left: auto; margin-right: auto; width:200px;height:150px;" src="Resources/logo.png" alt="Logo Baleadas" width="129" height="129" /></p>
    <form action="" method="post" name="FormBaleadas">
        <table style="margin-left: auto; margin-right: auto;">
            <tbody>
                <tr>
                    <td id="label">Nombre</td>
                    <td>
                        <input name="txtNombre" type="text" />
                    </td>
                    <td id="label"`>Fecha</td>
                    <td>
                        <input name="txtFecha" type="date" />
                    </td>
                </tr>
                <tr>
                    <td id="label">RTN</td>
                    <td>
                        <input name="txtRtn" type="text" />
                    </td >
                    <td id="label">ID</td>
                    <td>
                        <input name="txtId" type="text" />
                    </td>
                </tr>
            </tbody>
        </table>
        <hr />
        <p style="text-align: center;">Tipo de Baleada</p>
        <table style="margin-left: auto; margin-right: auto;">
            <tbody>
                <tr>
                    <td>
                        <input name="checkSencilla" type="checkbox" />
                    </td>
                    <td id="label">Sencilla</td>
                    <td>
                        <input name="txtSencilla" type="text" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="checkMixto" type="checkbox" />
                    </td>
                    <td id="label">Mixto</td>
                    <td>
                        <input name="txtMixto" type="text" />
                    </td>
                </tr>
            </tbody>
        </table>
        <hr />
        <p style="text-align: center;">Adicionales</p>
        <div id="container">
            <div id="complementos">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <input name="checkAguacate" type="checkbox" />
                            </td>
                            <td id="label">Aguacate</td>
                            <td>
                                <input name="txtAguacate" type="text" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="checChorizo" type="checkbox" />
                            </td>
                            <td id="label">Chorizo</td>
                            <td>
                                <input name="txtChorizo" type="text" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="checkLonganiza" type="checkbox" />
                            </td>
                            <td id="label">Longaniza</td>
                            <td>
                                <input name="txtLonganiza" type="text" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="checkPollo" type="checkbox" />
                            </td>
                            <td id="label">Pollo</td>
                            <td>
                                <input name="txtPollo" type="text" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="checkRes" type="checkbox" />
                            </td>
                            <td id="label">Res</td>
                            <td>
                                <input name="txtRes" type="text" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input name="checkCerdo" type="checkbox" />
                            </td>
                            <td id="label">Cerdo</td>
                            <td>
                                <input name="txtCerdo" type="text" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="panelDerecho">
              <div id="up">
                <div id="bebidas">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <input name="check14oz" type="checkbox" />
                                </td>
                                <td id="label">Refresco 14 oz.</td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="check16oz" type="checkbox" />
                                </td>
                                <td id="label">Refresco 16 oz.</td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="checkLonganiza" type="checkbox" />
                                </td>
                                <td id="label">Refresco 22 oz.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="totales">
                    <table>
                        <tbody>
                            <tr>
                                <td id="label">Subtotal:</td>
                                <td id="subtotal">XX</td>
                            </tr>
                            <tr>
                                <td id="label">ISV:</td>
                                <td id="isv">XX</td>
                            </tr>
                            <tr>
                                <td id="label">Total:</td>
                                <td id="total">XX</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div>
              <div id="botones">
                <table id="tableBotones">
                  <td>
                    <input name="btnCalcular" type="submit" value="Calcular"/>
                  </td>
                  <td>
                    <input name="btnSalvar" type="submit" value="Salvar"/>
                  </td>
                </table>
              </div>
            </div>
        </div>
    </form>
</body>

</html>
