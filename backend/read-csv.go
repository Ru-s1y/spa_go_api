package main

import (
  "encoding/csv"
  "log"
  // "io"
  "os"
  "fmt"
)

func main() {
  f, err := os.Open("file.csv")
  if err != nil {
    log.Fatal(err)
  }

  r := csv.NewReader(f)

  records, err := r.ReadAll()
  if err != nil {
    log.Fatal(err)
  }

  fmt.Printf("%#v\n", records)
  // for {
  // 	record, err := r.Read()
  // 	if err == io.EOF {
  // 		break
  // 	}
  // 	if err != nil {
  // 		log.Fatal(err)
  // 	}
  // 	fmt.Println(record)
  // }

  file, err := os.Create("file2.csv")
  if err != nil {
    log.Fatal(err)
  }

  w := csv.NewWriter(file)
  w.UseCRLF = false

  for _, record := range records {
    if err := w.Write(record); err != nil {
      log.Fatal(err)
    }
  }

  w.Flush()

  if err := w.Error(); err != nil {
    log.Fatal(err)
  }
}