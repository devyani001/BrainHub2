from pypdf import PdfReader, PdfWriter
reader = PdfReader("unit 4 assignment.pdf")
writer = PdfWriter()
for page in reader.pages:
    writer.add_page(page)
writer.encrypt("123pass45")
with open("yourfile_encrypted.pdf", "wb") as f:
    writer.write(f)