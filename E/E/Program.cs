using System;
using System.IO;

class Programm
{
    static void Main()
    {
        string quellPfad = @"D:\";
        string zielWurzel = @"D:\Unsortiert\";

        string[] dateien = Directory.GetFiles(quellPfad, "*.*", SearchOption.TopDirectoryOnly);
        int count = 0;

        foreach (string datei in dateien)
        {
            try
            {
                string endung = Path.GetExtension(datei).ToLower();
                if (string.IsNullOrWhiteSpace(endung))
                    endung = "_ohne_Endung";

                string ordnerName = endung.TrimStart('.');
                string zielOrdner = Path.Combine(zielWurzel, ordnerName);
                Directory.CreateDirectory(zielOrdner);

                string zielPfad = Path.Combine(zielOrdner, Path.GetFileName(datei));

                // Wenn Datei existiert, ersetze sie stumpf
                if (File.Exists(zielPfad))
                    File.Delete(zielPfad);

                File.Move(datei, zielPfad);
                count++;
                Console.WriteLine($"[{count}] Verschoben: {datei} → {zielPfad}");
            }
            catch (Exception ex)
            {
                Console.WriteLine($"Fehler bei {datei}: {ex.Message}");
            }
        }

        Console.WriteLine($"\nFertig. {count} Dateien verschoben.");
        Console.ReadKey();
    }
}
