using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;
using System.Collections;


namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
           if (!Directory.Exists("imgs"))
            {

                DialogResult dialogResult = MessageBox.Show("لم يتم لإإضافة صور حتي الان هل تريد انشاء ملف الصور؟", "Some Title", MessageBoxButtons.YesNo);
                if (dialogResult == DialogResult.Yes)
                {
                    System.IO.Directory.CreateDirectory("imgs");
                }

            }
        }

        private void button1_Click(object sender, EventArgs e)
        {

            OpenFileDialog open = new OpenFileDialog();
            open.Filter = "Image Files(*.jpg; *.jpeg; *.gif; *.bmp)|*.jpg; *.jpeg; *.gif; *.bmp";

            if (open.ShowDialog() == DialogResult.OK)
            {

                string filename = open.FileName;
                string extension;
                string direction;
                extension = Path.GetExtension(filename);

                if (radioButton1.Checked == true)
                {
                    direction = "north";
                }else if (radioButton2.Checked == true)
                {
                    direction = "south";
                }
                else if (radioButton3.Checked == true)
                {
                    direction = "east";
                }
                else if (radioButton4.Checked == true)
                {
                    direction = "west";
                }
                else if (radioButton5.Checked == true)
                {
                    direction = "map";
                }
                else
                {
                    direction = "";
                    MessageBox.Show("You must select img type");
                }

               if (direction != "" && textBox1.Text != "")
                {
                    pictureBox1.Image = new Bitmap(filename);
                    System.IO.File.Copy(open.FileName, "imgs/" + textBox1.Text + "-" + direction + extension);
                }

            }

            
        }
    }
}
