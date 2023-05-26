
import java.io.*;
import java.util.Scanner;
import com.spire.doc.Document;
import fr.opensagres.poi.xwpf.converter.pdf.PdfConverter;
import fr.opensagres.poi.xwpf.converter.pdf.PdfOptions;
import org.apache.poi.xwpf.usermodel.*;


public class InsertionClass {

    // TUTAJ USTAW ŚCIEŹKĘ DO WYGENEROWANIA PLIKU!!!
    final String fileDestination = "C:\\Users\\Skolb\\Downloads\\";
    final String fileName = "WeddingContract.pdf";
    private String date;
    private String groomFullName;
    private String groomNumber;
    private String brideFullName;
    private String brideLocation;
    private String brideNumber;
    private String weddingDate;
    private String localName;
    private String weddingPrice;
    private String priceInWords;
    private String deadline;

    public void getData(){
        Scanner scan=new Scanner(System.in);
        System.out.println("Data zawarcia umowy: ");
        date=scan.nextLine();
        System.out.println("Pan Młody: ");
        groomFullName=scan.nextLine();
        System.out.println("Numer telefonu młodego: ");
        groomNumber=scan.nextLine();
        System.out.println("Panna Młoda: ");
        brideFullName = scan.nextLine();
        System.out.println("Adres Panny Młodej: ");
        brideLocation= scan.nextLine();
        System.out.println("Numer telefonu Młodej: ");
        brideNumber=scan.nextLine();
        System.out.println("Data wesela: ");
        weddingDate=scan.nextLine();
        System.out.println("Nazwa lokalu i sali: ");
        localName= scan.nextLine();
        System.out.println("Cena wesela: ");
        weddingPrice= scan.nextLine();
        System.out.println("Cena słownie: ");
        priceInWords=scan.nextLine();
        System.out.println("Termin realizacji: ");
        deadline=scan.nextLine();

    }

    public void createWord() throws IOException {
        XWPFDocument document = new XWPFDocument();
        FileOutputStream out = new FileOutputStream (
                new File("WeddingContract.docx"));

        document.write(out);
        out.close();

        System.out.println(fileName+" written successully");
    }

    public void duplicateDocxFile() throws IOException {
        FileInputStream in = new FileInputStream("test.docx");
        FileOutputStream out = new FileOutputStream("WeddingContract.docx");

        try {

            int n;
            while ((n = in.read()) != -1) {
                out.write(n);
            }
        }
        finally {
            if (in != null) {
                in.close();
            }
            if (out != null) {
                out.close();
            }
        }
        System.out.println("File Copied");
    }

    public void modifyDocument() throws IOException {
        Document doc = new Document();
        doc.loadFromFile("WeddingContract.docx");
        doc.replace("«DzisiejszaData»", date, false, true);
        doc.replace("«imie_i_nazwisko_młodego»", groomFullName, false, true);
        doc.replace("«nr_tel_mlodego»", groomNumber, false, true);
        doc.replace("«imie_i_nazwisko_młodej»", brideFullName, false, true);
        doc.replace("«miejsce_zamieszkania_młodej»", brideLocation, false, true);
        doc.replace("«nr_tel_młodej»", brideNumber, false, true);
        doc.replace("«Data_wesela»", weddingDate, false, true);
        doc.replace("«nazwa_lokalu_i_Sali»", localName, false, true);
        doc.replace("«cena_wesela»", weddingPrice, false, true);
        doc.replace("«cena_słownie»", priceInWords, false, true);
        doc.replace("«box_z_datą_do_wyboru»", deadline, false, true);

        doc.saveToFile("WeddingContract.docx");
    }

    public void ConvertToPDF () {
        try {
            InputStream docFile = new FileInputStream("WeddingContract.docx");
            XWPFDocument doc = new XWPFDocument(docFile);
            PdfOptions pdfOptions = PdfOptions.create();
            OutputStream out = new FileOutputStream(new File(fileDestination+fileName));
            PdfConverter.getInstance().convert(doc, out, pdfOptions);
            doc.close();
            out.close();
            System.out.println("Done");
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    public void deleteFile(){
        File index = new File("WeddingContract.docx");
        if (!index.exists()) {
            index.mkdir();
        } else {
            index.delete();
            if (!index.exists()) {
                index.mkdir();
            }
        }
    }
}

