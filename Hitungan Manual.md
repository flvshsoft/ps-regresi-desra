Baik, mari kita gunakan contoh data yang berbeda dengan menggunakan tahun sebagai variabel independen (x) dan kepadatan penduduk sebagai variabel dependen (y). Misalkan kita memiliki data sebagai berikut:

```
Tahun (x)   Kepadatan Penduduk (y)
-------------------------------------
   2000             100
   2001             110
   2002             120
   2003             130
   2004             140
```

Langkah-langkah perhitungan:

1. **Hitung Rata-rata**: Hitung rata-rata dari x dan y.

   - Rata-rata x (mean_x) = (2000 + 2001 + 2002 + 2003 + 2004) / 5 = 2002
   - Rata-rata y (mean_y) = (100 + 110 + 120 + 130 + 140) / 5 = 120

2. **Hitung Slope (Koefisien Kemiringan) (m)**:

   ```
   m = Σ((x - mean_x) * (y - mean_y)) / Σ((x - mean_x)^2)
     = ((2000-2002)*(100-120) + (2001-2002)*(110-120) + (2002-2002)*(120-120) + (2003-2002)*(130-120) + (2004-2002)*(140-120)) / ((2000-2002)^2 + (2001-2002)^2 + (2002-2002)^2 + (2003-2002)^2 + (2004-2002)^2)
     = (-2*(-20) + (-1)*(-10) + 0*0 + 1*10 + 2*20) / ((-2)^2 + (-1)^2 + 0^2 + 1^2 + 2^2)
     = (-40 + 10 + 0 + 10 + 40) / (4 + 1 + 0 + 1 + 4)
     = 20 / 10
     = 2
   ```

   Jadi, slope (m) = 2.

3. **Hitung Intercept (b)**:

   ```
   b = mean_y - (m * mean_x)
     = 120 - (2 * 2002)
     = 120 - 4004
     = -3884
   ```

   Jadi, intercept (b) = -3884.

4. **Persamaan Regresi Linear**: Persamaan regresi linear adalah y = mx + b. Jadi, untuk data kita, persamaannya adalah:
   ```
   y = 2x - 3884
   ```

Dengan menggunakan persamaan ini, kita dapat memprediksi kepadatan penduduk untuk nilai tahun yang diberikan. Misalnya, jika kita ingin memprediksi kepadatan penduduk pada tahun 2005:

```
y = 2(2005) - 3884
  = 4016
```

Jadi, prediksi kepadatan penduduknya adalah 4016.
