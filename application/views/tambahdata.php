<!DOCTYPE html>
<html>

<head>
    <title>Sepatu Indah</title>
</head>

<body>


    <a href="<?= site_url('Welcome'); ?>">DATA PEMBELI</a>
    <br />
    <br />
    <h3>TAMBAH DATA PEMBELI</h3>
    <form method="POST" action="<?= site_url('tambah_data/insert'); ?>">
        <table>
            <tr>
                <td>Nama Pembeli</td>
                <td><input type="text" name="nama_pembeli"></td>
            </tr>
            <tr>
                <td>Nomor Handphone</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td>Merk Sepatu</td>
                <td><select name="merk_sepatu" id="merk_sepatu">
                        <option value="">--PILIH--</option>
                        <option value="Nike">Nike</option>
                        <option value="Adidas">Adidas</option>
                        <option value="Kickers">Kickers</option>
                        <option value="Eiger">Eiger</option>
                        <option value="Bucherri">Bucherri</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><select name="harga" id="harga">
                        <option value="">--PILIH--</option>
                        <option value="375000">375000</option>
                        <option value="300000">300000</option>
                        <option value="250000">250000</option>
                        <option value="275000">275000</option>
                        <option value="400000">400000</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Ukuran</td>
                <td><select name="ukuran" id="ukuran">
                        <option value="">--PILIH--</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit!"></td>
            </tr>
        </table>
    </form>
</body>

</html>