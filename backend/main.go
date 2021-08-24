package main

import (
	"encoding/csv"
  "fmt"
	"io"
	"log"
	"strings"
)

func main() {
  s := `名前,年齢,身長,体重
Tanaka,31,198cm,97kg
Suzuki,46,180cm,79kg
Matsui,45,188cm,95kg
`
  r := csv.NewReader(strings.NewReader(s))

  for {
    record, err := r.Read()
    if err == io.EOF {
      break
    }
    if err != nil {
      log.Fatal(err)
    }

    fmt.Printf("%#v\n", record)
  }
}
